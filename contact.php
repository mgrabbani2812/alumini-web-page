<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Sep 2023 07:33:11 GMT -->
<head>
    <!-- Meta Data -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Contact Us - University Alumni Html Template</title>

    <?php include 'inc/head.php'; ?>


</head>

<body id="contact-us-v1" class="contact-page-one" data-style="default">
    <a href="#" class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <div id="main_content" class="main-content">


        <!--=========================-->
        <!--=        Navbar         =-->
        <!--=========================-->
        <?php include 'inc/header.php'; ?>
        <!-- /.site-header -->


        <!--==========================-->
        <!--=         Banner         =-->
        <!--==========================-->
        <section id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center">
                        <div class="page-title-content">
                            <h1 class="h2">Contact Us</h1>
                            <p>
                                Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need
                            </p>
                            <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============================-->
        <!--=         Contact Us        =-->
        <!--=============================-->
        <section id="page-content-wrap">
            <div class="contact-page-wrap section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-content-inner">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <!-- Map Area Start -->
                                        <div class="map-area-wrap">
                                            <iframe src="https://snazzymaps.com/embed/75079"></iframe>
                                        </div>
                                        <!-- Map Area End -->
                                    </div>

                                    <div class="col-lg-6 m-auto">
                                        <div class="contact-form-wrap">
                                            <h3>Send Message</h3>
                                            <form action="#" id="cbx-contact-form">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="cbxname">Name</label>
                                                            <input type="text" name="cbxname" required id="cbxname" placeholder="Your Full Name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="cbxemail">Email</label>
                                                            <input type="email" name="cbxemail" required id="cbxemail" placeholder="Your Email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cbxsubject">Subject</label>
                                                    <input type="text" name="cbxsubject" id="cbxsubject" placeholder="Subject" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="cbxmessage">Message</label>
                                                    <textarea name="cbxmessage" id="cbxmessage" rows="10" cols="80" placeholder="Your Message" class="form-control"></textarea>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cbxsendme" name="cbxsendme" value="on">
                                                    <label class="custom-control-label" for="cbxsendme">Send Me CC</label>
                                                </div>

                                                <button class="btn btn-reg">Send</button>
                                                <div id="cbx-formalert"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=========================-->
        <!--=        Footer         =-->
        <!--=========================-->
        <?php include 'inc/footer.php'; ?>



    </div>
    <!-- /#site -->


    <!-- Dependency Scripts -->
    <script id="script-bundle" src="assets/vendors/js/bundle.js"></script>

    <script id="color-switcher" src="assets/js/switcher.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>


</body>


<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Sep 2023 07:33:11 GMT -->
</html>