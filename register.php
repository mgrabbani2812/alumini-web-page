<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Sep 2023 07:33:00 GMT -->
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Register - University Alumni Html Template</title>
<?php include 'inc/head.php'; ?>
</head>

<body id="register-v1" class="register-page-one" data-style="default">
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
                            <h1 class="h2">Membership Form</h1>
                            <p>
                                Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need
                            </p>
                            <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===========================-->
        <!--=         Register        =-->
        <!--===========================-->
        <section id="page-content-wrap">
            <div class="register-page-wrapper section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="register-page-inner">
                                <div class="col-lg-10 m-auto">
                                    <div class="register-form-content">
                                        <div class="row justify-content-between">
                                            <!-- Signin Area Content Start -->
                                            <div class="col-lg-4 col-md-6 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="signin-area-wrap">
                                                            <h4>Already a Member?</h4>
                                                            <div class="sign-form">
                                                                <form action="https://codeboxr.net/themedemo/unialumni/html/index.php"  method="post" enctype="multipart/form-data">
                                                                    <input type="text" placeholder="Enter your ID">
                                                                    <input type="password" placeholder="Password">
                                                                    <button type="submit" class="btn btn-reg">Login</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Signin Area Content End -->

                                            <!-- Regsiter Form Area Start -->
                                            <div class="col-lg-7 col-md-6 ml-auto">
                                                <div class="register-form-wrap">
                                                    <h3>registration Form</h3>
                                                    <div class="register-form">
                                                        <form action="register_entity.php" method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_email">Email</label>
                                                                        <input type="email" class="form-control" id="register_email" name="register_email" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_password">Password</label>
                                                                        <input type="password" class="form-control" id="register_password" name="register_password" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_name">Name</label>
                                                                        <input type="text" class="form-control" id="register_name" name="register_name" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_stuid">Student Id</label>
                                                                        <input type="text" class="form-control" id="register_stuid" name="register_stuid" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_year">Passing Year</label>
                                                                        <input type="text" class="form-control" id="register_year" name="register_year" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_deptno">Depertment No</label>
                                                                        <input type="text" class="form-control" id="register_deptno" name="register_deptno" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group file-input">
                                                                <input type="file" name="register_file" id="customfile" class="d-none" />
                                                                <label class="custom-file" for="customfile"><i class="fa fa-upload"></i>Upload Your Photo</label>
                                                            </div>

                                                            <div class="gender form-group">
                                                                <label class="g-name d-block">Gender</label>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="register_gender_male" name="register_gender" value="mail" class="custom-control-input" />
                                                                    <label class="custom-control-label" for="register_gender_male">Male</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="register_gender_female" name="register_gender" value="female" class="custom-control-input">
                                                                    <label class="custom-control-label" for="register_gender_female">Female</label>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox float-lg-right">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="terms_agreed">
                                                                    <label class="custom-control-label" for="customCheck1"> I
                                                                        have read and agree to the <a href="#">Alumni</a> Terms
                                                                        of Service</label>
                                                                </div>
                                                                <input type="submit" class="btn btn-reg" value="Registration">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Regsiter Form Area End -->
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
        <footer id="footer-area">
            <!-- Footer Widget Start -->
            <div class="footer-widget section-padding">
                <div class="container">
                    <div class="row">
                        <!-- Single Widget Start -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-widget-wrap">
                                <div class="widgei-body">
                                    <div class="footer-about">
                                        <img src="assets/images/logo/footer-logo.svg" alt="Logo" class="img-fluid" />
                                        <p>
                                            We are legend Lorem ipsum dolor sitmet,
                                            nsecte ipisicing eit, sed do eiusmod tempor
                                            incidunt ut et do maga aliqua enim ad minim.
                                        </p>
                                        <a href="#">Phone: +8745 44 5444</a>
                                        <a href="#">Fax: +88474 156 362</a> <br />
                                        <a href="#">Email: demoemail@demo.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->

                        <!-- Single Widget Start -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-widget-wrap">
                                <h4 class="widget-title">Get In Touch</h4>
                                <div class="widgei-body">
                                    <p>
                                        We are legend Lorem ipsum dolor sitmet, nsecte
                                        ipisicing eit, sed
                                    </p>
                                    <div class="newsletter-form">
                                        <form id="cbx-subscribe-form">
                                            <input name="email" type="email" placeholder="Enter Your Email" id="subscribe" required />
                                            <button type="submit">
                                                <i class="far fa-paper-plane"></i>
                                            </button>

                                            <p id="cbx-subscribe-form-error"></p>
                                        </form>
                                    </div>
                                    <div class="footer-social-icons">
                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-vimeo-v"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->

                        <!-- Single Widget Start -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-widget-wrap">
                                <h4 class="widget-title">Usefull Link</h4>
                                <div class="widgei-body">
                                    <ul class="double-list footer-list clearfix">
                                        <li><a href="#">Pricing Plan</a></li>
                                        <li><a href="#">Categories</a></li>
                                        <li><a href="#">Populer Deal</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Pricing Plan</a></li>
                                        <li><a href="#">Categories</a></li>
                                        <li><a href="#">Populer Deal</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Support</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->

                        <!-- Single Widget Start -->
                        <div class="col-lg-2 col-sm-6">
                            <div class="single-widget-wrap">
                                <h4 class="widget-title">University</h4>
                                <div class="widgei-body">
                                    <ul class="footer-list clearfix">
                                        <li><a href="#">Pricing Plan</a></li>
                                        <li><a href="#">Categories</a></li>
                                        <li><a href="#">Populer Deal</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Support</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Bottom Start -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="footer-bottom-text">
                                <p>© 2023 Codeboxr, All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom End -->
        </footer>



    </div>
    <!-- /#site -->


    <!-- Dependency Scripts -->
    <script id="script-bundle" src="assets/vendors/js/bundle.js"></script>

    <script id="color-switcher" src="assets/js/switcher.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>


</body>


<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Sep 2023 07:33:00 GMT -->
</html>