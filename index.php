<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sunny Ojo - Welcome to my Portfolio</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- <link rel="manifest" href="site.webmanifest"> -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/gijgo.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slicknav.css" />

    <link rel="stylesheet" href="css/style.css" />
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <h4 class="lead text-white mt-2">Sunny Ojo</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="#home">home</a></li>
                                            <li><a href="#about">about</a></li>
                                            <li><a href="#works">Works</a></li>

                                            <li><a href="#contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="#contact">Hire Me</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->



    <!-- slider_area_start -->
    <div class="slider_area" id="home">
        <?php
if (isset($_SESSION["error"])) {
    echo ' <div class="alert alert-danger position-absolute text-center float-right " style="margin-top:80px;margin-left:30px;margin-bottom:60px;">' . $_SESSION["error"] . '</div>';
    session_destroy();
}
?>
        <div class="clearfix"></div>
        <div class="single_slider  d-flex align-items-center slider_bg_1 "
            style="max-height:110vh;min-height:400px;padding-top:200px;padding-bottom:160px">
            <div class="container mt-lg-5">

                <div class="row align-items-center position-relative">
                    >
                    <div class=" col-lg-6">
                        <div class="slider_text">
                            <h3 class="lead">
                                <small class="text-warning "> Hi, Welcome to my portfolio,
                                    <br />
                                    <span class="text-white">I Am A Web Developer.</span></small>
                            </h3>
                            <a class="btn btn-primary btn-lg" href="https://github.com/sunny-Ojo" target="blank">View
                                Works</a>
                            <a class="btn btn-warning btn-lg d-lg-none d-sm-block" href="#contact">Hire Me</a>
                        </div>
                    </div>
                    <div class="my_img  d-md-block " style="position: relative;">
                        <img src="img/sunny-removebg-preview.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <div class="download_area " id="about">
        <div class="container">
            <div class="download_text">
                <h3 class="text-center" style="margin-top: 29px">
                    About Me
                </h3>
            </div>
            <div class="row">
                <div class="col-xl-10"></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="download_left">
                        <p class="text-white">
                            Full Name:
                            <span class="text-warning pl-2">Njoku Sunny Ojo</span>
                        </p>
                        <p class="text-white">
                            Email:
                            <a href="mailto:njokusunnyojo@gmail.com" class="text-warning pl-2">
                                njokusunnyojo@gmail.com</a>
                        </p>
                        <p class="text-white">
                            Phone:
                            <a href="tel://08121225275" class="text-warning pl-2">08121225275,</a>
                            <a href="tel://09016417594" class="text-warning pl-2">
                                09016417594</a>
                        </p>

                        <p>
                            A highly motivated young web developer looking to kick start my
                            career in a reputable organisation. Possessing enthusiasm,
                            ability to work with others to achieve set outcomes, high
                            spirited, energetic, very good thinker, innovative and creative.
                        </p>
                        <p>
                            Key strengths include strong attention to details and willing to
                            learn and develop professionally.
                        </p>


                        <a href="files/sunny-cv-converted.pdf" class="btn btn-primary btn-lg p-2 ">View CV</a>
                        <a href="https://github.com/sunny-Ojo" class="btn btn-success btn-lg p-2 ">View Projects</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="progress_skills">
                        <h3 class="text-center text-white ">My Skills</h3>
                        <div class="single_progress">
                            <div class="label d-flex justify-content-between">
                                <span>HTML5</span>
                                <span>95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar " role="progressbar" style="width: 95%" aria-valuenow="95"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single_progress">
                            <div class="label d-flex justify-content-between">
                                <span>CSS3</span>
                                <span>75%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar " role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single_progress">
                            <div class="label d-flex justify-content-between">
                                <span>Javascript</span>
                                <span>70%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single_progress">
                            <div class="label d-flex justify-content-between">
                                <span>Php and Mysql</span>
                                <span>80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single_progress">
                            <div class="label d-flex justify-content-between">
                                <span>Laravel Framework</span>
                                <span>85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single_progress">
                            <div class="label d-flex justify-content-between">
                                <span>APIs</span>
                                <span>65%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- gallery_area start  -->
    <div class="gallery_area" id="works" style="background:#3B2930">
        <div class="container">
            <div class="section_title mb-50 ml-5">
                <h3 class="text-center pb-3">My Works</h3>
            </div>
            <div class="row">
                <div class="col-xl-12"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single_gallery">
                                <div class="thumb">
                                    <img src="img/project1.png" alt="img1" />
                                </div>
                                <div class="gallery_heading">
                                    <span>About-section of an Event</span>
                                    <a href="works_details.html">
                                        <h4>An Online Registration Platform</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="single_gallery">
                                <div class="thumb">
                                    <img src="img/project2.png" alt="" />
                                </div>
                                <div class="gallery_heading">
                                    <span>Admin Dashboard</span>
                                    <a href="works_details.html">
                                        <h4>Admin Panel</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single_gallery">
                                <div class="thumb">
                                    <img src="img/project3.png" alt="" />
                                </div>
                                <div class="gallery_heading">
                                    <span>Overview of staff's data</span>
                                    <a href="works_details.html">
                                        <h4>Admin Dashboard</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="single_gallery">
                                <div class="thumb">
                                    <img src="img/project4.png" alt="" />
                                </div>
                                <div class="gallery_heading">
                                    <span>A staffs Profile</span>
                                    <a href="works_details.html">
                                        <h4>Overview of a staff's profile</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="more_works">
                                <a class="boxed-btn3-line" href="https://github.com/sunny-Ojo">More Works</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery_area end  -->

    <!-- footer start -->
    <footer class="footer" id="contact">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="lets_talk">
                            <h3>
                                Are you Looking for a web developer?
                                <span class="text-warning ">I am available for hire.</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-xs-12">
                        <p class="text-center text-white">
                            Please fill this form
                        </p>
                        <form id="contactForm" novalidate="novalidate" action="contact.php" class="bg-light p-4 p-md-5 "
                            method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" name="name" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email" name="email"
                                    required />
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Your number" name="number"
                                    required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Company Name" name="company_name"
                                    required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Company Address"
                                    name="company_address" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" name="subject" required />
                            </div>
                            <div class="form-group">
                                <textarea id="your_message" cols="30" rows="7" name="your_message" class="form-control"
                                    placeholder="Message" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Hire Me" class="btn btn-primary py-3 px-5" name="submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row justify-content-center text-center">
                    <div class="col-md-6">
                        <hr class="bg-white" />
                        <p>
                            <h5 class="text-white"> Social Platforms: </h5>
                            <a href="https://web.facebook.com/SunnyOjoNjoku" target="blank">
                                <i class="fa fa-facebook-square fa-2x text-primary"></i>
                            </a>
                            <a href="https://www.instagram.com/ojoskid_sunny/" target="blank"><i
                                    class="fa fa-instagram fa-2x ml-3" style="color: purple;"></i></a>
                            <a href="https://twitter.com/SunnyOjo4" target="blank"><i
                                    class="fa fa-twitter-square fa-2x text-primary ml-3"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=2349016417594" target="blank"><i
                                    class="fa fa-whatsapp fa-2x ml-3 text-success"></i></a>
                        </p>

                        <p class="copy_right text-center">
                            Copyright &copy; Sunny Ojo | All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>