<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "admin_panel";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['register_email']) && isset($_POST['terms_agreed'])) {
    $email = $_POST['register_email'];
    $password = $_POST['register_password'];
    $name = $_POST['register_name'];
    $student_id = $_POST['register_stuid'];
    $passing_year = $_POST['register_year'];
    $department_no = $_POST['register_deptno'];
    $gender = $_POST['register_gender'];

    // Handle file upload
    $target_directory = "uploads/"; // Choose the directory where you want to store uploaded files
    $target_file = $target_directory . basename($_FILES["register_file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a valid image
    $check = getimagesize($_FILES["register_file"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (you can set a maximum file size as needed)
    if ($_FILES["register_file"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (customize allowed file types)
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["register_file"]["tmp_name"], $target_file)) {
            // File uploaded successfully, now insert data into the database
            $sql_query = "INSERT INTO users (email, password, name, student_id, passing_year, department_no, photo, gender)
                          VALUES ('$email', '$password', '$name', '$student_id', '$passing_year', '$department_no', '$target_file', '$gender')";

            if (mysqli_query($conn, $sql_query)) {
                //echo "New Details Entry inserted Successfully !";
                echo "<script>
window.location.href='index.php';
alert('New Details Entry inserted Successfully !');
</script>";
            } else {
                echo "Error: " . $sql_query . " " . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    /*if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }*/
    
    if (isset($_POST['login_id']) && isset($_POST['login_password'])) {
        $login_id = $_POST['login_id'];
        $login_password = $_POST['login_password'];
    
        // Query the database to check if the user exists
        $sql_query = "SELECT * FROM users WHERE email='$login_id' AND password='$login_password'";
        $result = mysqli_query($conn, $sql_query);
    
        if (mysqli_num_rows($result) == 1) {
            // User is found, store user information in session
            $user = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            // Redirect to a logged-in page
            header("Location: index.php"); // Create welcome.php for logged-in users
            exit();
        } else {
            // Login failed, display an error message or redirect to a login error page
            echo "Login failed. Please check your credentials.";
        }
    }




    mysqli_close($conn);
}

?>

    