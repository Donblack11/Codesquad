<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>Web executive</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli%7CRubik:400,400i,500,700">

    <!-- ======= Bootstrap CSS ======= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- ======= Font Awesome CSS ======= -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- ======= Owl Carousel CSS ======= -->
    <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">

    <!-- ======= Magnific Popup CSS ======= -->
    <link rel="stylesheet" href="assets/plugins/magnific-popup/magnific-popup.min.css">

    <!-- ======= Main Stylesheet ======= -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- ======= Custom Stylesheet ======= -->
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
<!-- Header Begin -->
    <header class="header fixed-top">
        <!-- Header Style One Begin -->
        <div class="fixed-top header-main style--one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-4 col-8">
                        <!-- Logo Begin -->
                        <div class="logo">
                            <a href="index.html">
                                <img class="default-logo" src="assets/img/logo.png" data-rjs="2" alt="">
                                <img class="sticky-logo" src="assets/img/sticky_logo.png" data-rjs="2" alt="">
                            </a>
                        </div>
                        <!-- Logo End -->
                    </div>

                     <div class="col-lg-9 col-sm-8 col-4">
                        <!-- Main Menu Begin -->
                        <div class="main-menu d-flex align-items-center justify-content-end">
                            <ul class="nav align-items-center">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="web development.php">Web Design</a></li>
                                <li><a href="email hosting.html">Email Hosting</a></li>
                                <li><a href="graphics.html">Graphics</a></li>
                                <li><a href="marketer.php">Marketer</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li class="current-menu-parent"><a href="login.php">Login / Signup</a></li>
                            </ul>
                            <!-- Offcanvas Holder Trigger -->
                            <span class="offcanvas-trigger text-right d-none d-lg-block">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <!-- Offcanvas Trigger End -->
                        </div>
                        <!-- Main Menu ENd -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Style One End -->
    </header>
    <!-- Header End -->

    <!-- Offcanvas Begin -->
    <div class="offcanvas-overlay fixed-top w-100 h-100"></div>
    <div class="offcanvas-wrapper bg-white fixed-top h-100">
        <!-- Offcanvas Close Button Begin -->
        <div class="offcanvas-close position-absolute">
            <img src="assets/img/icons/close.svg" class="svg" alt="">
        </div>
        <!-- Offcanvas Close Button End -->

        <!-- Offcanvas Content Begin -->
        <div class="offcanvas-content">
            <!-- About Widget Begin -->
            <div class="widget widget_about">
                <div class="widget-logo">
                    <img src="assets/img/logo.png" data-rjs="2" alt="">
                </div>

            </div>
            <!-- About Widget End -->

            <!-- Contact Widget Begin -->
            <div class="widget widget_contact_info">
                <!-- Widget Logo Begin -->
                <div class="widget-title">
                    <h4>Get in touch</h4>
                </div>
                <!-- Widget Logo End -->
            
                <!-- Widget Content Begin -->
                <div class="info-content">
                    <div class="single-info">
                        <span>Office Location</span>
                        <p>12, Onikanga Street, GRA, Ilorin.</p>
                    </div>
                    <div class="single-info">
                        <span>Business Phone</span>
                        <p><a href="#">+2348 171 299 361</a></p>                             
                    </div>
                    <div class="single-info">
                        <span>Support mail</span>
                        <p>
                             <a href="mailto:hello@webexecutives.co">hello@webexecutives.co</a> 
                        </p>
                    </div>
                </div>
                <!-- Widget Content End -->
            </div>
            <!-- About Widget End -->

            <!-- Offcanvas Button Begin -->
            <div class="offcanvas-btn">
                <a href="#" class="btn"><span>Get Appointment</span></a>
            </div>
            <!-- Offcanvas Button End -->
        </div>
        <!-- Offcanvas Content End -->
    </div>
    <!-- Offcanvas End -->

    <!-- Page Title Begin -->
    <section class="page-title-bg pt-250 pb-100" data-bg-img="assets/img/section-pattern/service-4.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title text-center text-white">
                        <h2>Log in</h2>
                        <ul class="list-inline">
                            <li><a href="index.html">Home</a></li>
                            <li>Log in</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title End -->

    <!-- Blog Begin -->
    <section class="pt-120 pb-90 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>

               <div class="col-lg-6">
                   <div class="contact-form-wrapper">
                        <h3>Create New Password</h3>
                        <p>Enter your new password in the form bellow.</p>
                        
                        <?php
                    include('connect.php');
                    if (isset($_GET["setkey"]) && isset($_GET["email"])
                    && isset($_GET["action"]) && ($_GET["action"]=="reset")
                    && !isset($_POST["action"])){
                    $key = $_GET["setkey"];
                    $email = $_GET["email"];
                    $curDate = date("Y-m-d H:i:s");
                    $query = mysqli_query($con,"
                    SELECT * FROM 'password_reset_temp' WHERE 'setkey'='".$key."' and 'email'='".$email."';");
                    $row = mysqli_num_rows($query);
                    if ($row==""){
                    $error .= '<h2>Invalid Link</h2>
                    <p>The link is invalid/expired. Either you did not copy the correct link from the email, 
                    or you have already used the key in which case it is deactivated.</p>
                    <p><a href="https://www.allphptricks.com/forgot-password/index.php">Click here</a> to reset password.</p>';
                        }else{
                        $row = mysqli_fetch_assoc($query);
                        $expDate = $row['expDate'];
                        if ($expDate >= $curDate){
                        ?>
                       <form method="POST" action="" class="contact-form" name="update">
                        <input type="hidden" name="action" value="update">
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <input type="password" name="pswd" class="theme-input-style" maxlength="15" placeholder="Enter New password" required />
                                </div>
                                <div class="col-md-12">
                                    <input type="password" name="Cpswd" class="theme-input-style" maxlength="15" placeholder="Confirm New Password"/>
                                </div>
                               
                               <div class="col-12">
                            <input type="hidden" name="email" value="<?php echo $email;?>"/>
                            <button type="submit" name="reset" id="reset" class="btn"><span>Reset Password</span></button>
                            <br>
                        </form>
                        </div>
                        </div>
                            <div class="form-response"></div>
                        
                    </div>
              </div>
            </div>
        </div>
                            <?php
                        }else{  
                        $error .= "<h2>Link Expired</h2>
                        <p>The link is expired. You are trying to use the expired link which as valid only 24 hours (1 days after request).<br /><br /></p>";
                                        }
                                }
                        if($error!=""){
                            echo "<div class='error'>".$error."</div><br />";
                            }           
                        } // isset email key validate end


                        if(isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"]=="update")){
                        $error="";
                        $pass1 = mysqli_real_escape_string($con,$_POST["pswd"]);
                        $pass2 = mysqli_real_escape_string($con,$_POST["Cpswd"]);
                        $email = $_POST["email"];
                        $curDate = date("Y-m-d H:i:s");
                        if ($pass1!=$pass2){
                                $error .= "<p>Password do not match, both password should be same.<br /><br /></p>";
                                }
                            if($error!=""){
                                echo "<div class='error'>".$error."</div><br />";
                                }else{

                        $pass1 = md5($pass1);
                        mysqli_query($con,
                        "UPDATE 'user' SET 'password'='".$pass1."', 'Cpassword'= '".$pass2."', 'trn_date'='".$curDate."' WHERE 'Email'='".$email."';");   

                        mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");     
                            
                        echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
                        <p><a href="https://www.allphptricks.com/forgot-password/login.php">Click here</a> to Login.</p></div><br />';
                                }       
                        }
                        ?>
                               
    </section>
            
    <!-- Blog End -->

      <!-- Footer Begin -->
    <footer class="footer bg-light section-pattern footer-bg" data-bg-img="assets/img/section-pattern/footer-pattern.png">
        <!-- Footer Top Begin -->
        <div class="footer-top pt-60">
            <div class="container border-bottom">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <!-- Contact Widget Begin -->
                        <div class="widget widget_contact_info">
                            <!-- Widget Logo Begin -->
                            <div class="widget-logo">
                                <img src="assets/img/footer_logo.png" data-rjs="2" alt="">
                            </div>
                            <!-- Widget Logo End -->

                            <!-- Widget Content Begin -->
                            <div class="info-content">
                                <div class="single-info">
                                    <span>Office Location</span>
                                    <p>12, Onikanga Street, GRA, Ilorin.</p>
                                </div>
                                <div class="single-info">
                                    <span>Business Phone</span>
                                    <p><a href="#">+2348 171 299 361</a></p>
                                </div>
                                <div class="single-info">
                                    <span>Support mail</span>
                                    <p>
                                        <a href="mailto:hello@webexecutives.co">hello@webexecutives.co</a> 
                                    </p>
                                </div>
                            </div>
                            <!-- Widget Content End -->
                        </div>
                        <!-- About Widget End -->
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <!-- Widget Quick Nav -->
                        <div class="widget widget_nav_menu">
                            <!-- Widget Title Begin  -->
                            <div class="widget-title">
                                <h4>Quick Links</h4>
                            </div>
                            <!-- Widget Title End  -->

                            <!-- Menu Begin -->
                           <ul class="menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="email hosting.html">Our Services</a></li>
                                <li><a href="marketer.php">Become a marketer</a></li>
                                <li><a href="projectform.html">Start a Project</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                            <!-- Menu End -->
                        </div>
                        <!-- Widget Quick Nav -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Widget Newsletter Begin -->
                        <div class="widget widget_newsletter">
                            <!-- Widget Title Begin  -->
                            <div class="widget-title">
                                <h4>Newsletter</h4>
                            </div>
                            <!-- Widget Title End  -->

                            <div class="newsletter-content">
                                <P>Sign up for our news letter to receive update and promo notification as soon as they are up.</P>

                                <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" class="newsletter-form">
                                    <div class="theme-input-group">
                                        <input type="text" placeholder="Your Email">
                                        <button type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Widget Newsletter End -->

                        <!-- Widget Social Icon Begin -->
                        <div class="widget widget_social_icon">
                            <ul class="social_icon_list list-inline">
                                <li>
                                    <a href="https://www.facebook.com/webexllc"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/webexllc"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/webexllc/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/webexllc/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Widget Social Icon End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Begin -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <span>Copyright &copy; Webexecutives 2021. | All Right Reseave </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
        
    </footer>
    <!-- Footer End -->

    <!-- Back to Top Begin -->
    <a href="#" class="back-to-top position-fixed">
        <div class="back-toop-tooltip"><span>Back To Top</span></div>
        <div class="top-arrow"></div>
        <div class="top-line"></div>
    </a>
    <!-- Back to Top End -->

    <!-- ======= jQuery Library ======= -->
    <script src="assets/js/jquery.min.js"></script>
    
    <!-- ======= Bootstrap Bundle JS ======= -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
    <!-- =======  Mobile Menu JS ======= -->
    <script src="assets/js/menu.min.js"></script>
    
    <!-- ======= Waypoints JS ======= -->
    <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    
    <!-- ======= Counter Up JS ======= -->
    <script src="assets/plugins/waypoints/jquery.counterup.min.js"></script>
    
    <!-- ======= Owl Carousel JS ======= -->
    <script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>
    
    <!-- ======= Isotope JS ====== -->
    <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
    
    <!-- ======= Magnific Popup JS ======= -->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    
    <!-- ======= Countdown JS ======= -->
    <script src="assets/plugins/countdown/countdown.min.js"></script>
    
    <!-- ======= Retina JS ======= -->
    <script src="assets/plugins/retinajs/retina.min.js"></script>
    
    <!-- ======= Google API ======= -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>
    
    <!-- ======= Main JS ======= -->
    <script src="assets/js/main.js"></script>
    
    <!-- ======= Custom JS ======= -->
    <script src="assets/js/custom.js"></script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/618a64176885f60a50bafdcb/1fk29dvha';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>