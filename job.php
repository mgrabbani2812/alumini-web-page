<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details Form</title>
    <!-- Include the Tailwind CSS stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">


    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-6">Job Details Form</h2>

        <form action="job.php" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="fullName" class="block text-gray-700 text-sm font-bold mb-2">Full Name:</label>
                <input type="text" id="fullName" name="fullName" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone:</label>
                <input type="tel" id="phone" name="phone" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="resume" class="block text-gray-700 text-sm font-bold mb-2">Upload Resume (PDF):</label>
                <input type="file" id="resume" name="resume" accept=".pdf" class="w-full px-3 py-2 border rounded-md" required>
            </div>

           <!-- <div class="mb-4">
                <label for="company" class="block text-gray-700 text-sm font-bold mb-2">Select Company:</label>
                <select id="company" name="company" class="w-full px-3 py-2 border rounded-md" required>
                    <option value="company1">Company 1</option>
                    <option value="company2">Company 2</option>
                    <option value="company3">Company 3</option>
                </select>
            </div>-->

            <h3 class="text-xl font-semibold mb-4">Job Details</h3>

            <div class="mb-4">
                <label for="position" class="block text-gray-700 text-sm font-bold mb-2">Position:</label>
                <input type="text" id="position" name="position" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="department" class="block text-gray-700 text-sm font-bold mb-2">Department:</label>
                <input type="text" id="department" name="department" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
                <input type="text" id="location" name="location" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="jobDescription" class="block text-gray-700 text-sm font-bold mb-2">Job Description:</label>
                <textarea id="jobDescription" name="jobDescription" rows="4" class="w-full px-3 py-2 border rounded-md" required></textarea>
            </div>

            <div class="mt-6">
                <input type="submit" value="Submit" class="bg-blue-500 text-white px-4 py-2 rounded-md cursor-pointer">
            </div>
        </form>
    </div>
    
</body>
</html>
<?php
// Assuming you have a MySQL database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "admin_panel";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $resume = $_FILES["resume"]["name"];
    //$company = $_POST["company"];
    $position = $_POST["position"];
    $department = $_POST["department"];
    $location = $_POST["location"];
    $jobDescription = $_POST["jobDescription"];

    // Upload the resume file to a server directory
    $uploadDir = "uploads/"; // Create this directory in your project
    $resumePath = $uploadDir . $resume;
    move_uploaded_file($_FILES["resume"]["tmp_name"], $resumePath);

    // Insert data into the database
    $sql = "INSERT INTO job_details (fullName, email, phone, resume, position, department, location, jobDescription)
            VALUES ('$fullName', '$email', '$phone', '$resume', '$position', '$department', '$location', '$jobDescription')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";

        // Redirect to career.php after 5 seconds
        header("refresh:5;url=career.php");
        exit(); // Ensure that no further output is sent
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
