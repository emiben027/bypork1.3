<?php

$success=""; //remember to call success in form

if(isset($_POST['submit'])){
  require 'phpmailer/PHPMailerAutoload.php'; //confirm directory 
  $mail = new PHPMailer;

 
  $mail->Host='smtp.privateemail.com';
  $mail->Port=587;
  $mail->SMTPAuth=true;
  $mail->SMTPSecure='tls';
  $mail->Username='emmie027@gmail.om'; //email address you want to send from
  $mail->Password='emmieben27';


  $mail->setFrom($_POST['email'],$_POST['name']);
  $mail->addAddress('bypork@telegmail.com'); //email address you want to send to
  $mail->addReplyTo($_POST['email'],$_POST['name']);


  $mail->isHTML(true);
  $mail->Subject='Brand Rep Form Submission:  '.$_POST['subject'];
  $mail->Body='<h6 align=center>Name :'.$_POST['name'].'<br>Phone :'.$_POST['phone'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h6>';  //declare all var to be sent


  if(!$mail->send()){
    $success="Something Went Wrong. Please try again."; 
  }
  else{
    $success="Thanks".$_POST.$_POST['name']." your message has been sent we will get back to you soon!";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<!-- bypork.com -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Bypork - Saving Africa With Pork" />
<meta name="author" content="https://www.bypork.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Bypork - Saving Africa With Pork</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/logoicon.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css"/>

<!-- slick-slider -->
<link rel="stylesheet" type="text/css" href="css/slick.css">

<link rel="stylesheet" type="text/css" href="css/slick-theme.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css"/>

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>

</head>

<body>

    <!--page start-->
    <div class="page">
        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <!-- ttm-topbar-wrapper -->
                    <div class="ttm-topbar-wrapper clearfix">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ttm-topbar-content">
                                        <ul class="top-contact text-left">
                                            <li>Your Trusted 24 Hours Service Provider!</li>
                                        </ul>
                                        <div class="topbar-right text-right">
                                            <ul class="top-contact">
                                                <li>Office Hour : 08:00am - 6:00pm</li>
                                            </ul>
                                            <div class="ttm-social-links-wrapper list-inline">
                                                <ul class="social-icons">
                                                    <li><a href="facebook.com/bypork"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="twitter.com/bypork"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li><a href="instagram.com/bypork"><i class="fa fa-instagram"></i></a>
                                                    </li>
                                                    <li><a href="linkedin.com/"><i class="fa fa-linkedin"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- ttm-topbar-wrapper end -->
                    <div class="ttm-widget_header">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex flex-row align-items-center">
                                        <!-- site-branding -->
                                        <div class="site-branding mr-auto">
                                            <a class="home-link" href="index.php" title="Bypork" rel="home">
                                                <img src="images/logo2.jpg" id="logo-img" class="img-center" alt="logo">
                                            </a>
                                        </div><!-- site-branding end -->
                                        <!-- widget-info -->
                                        <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                            <div class="widget_icon"><i class="flaticon-call"></i></div>
                                            <div class="widget_content">
                                                <h5 class="widget_title">+234 8100 317 388</h5>
                                                <p class="widget_desc">Make A Call</p>
                                            </div>
                                        </div><!-- widget-info end -->
                                        <!-- widget-info -->
                                        <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                            <div class="widget_icon"><i class="flaticon-email"></i></div>
                                            <div class="widget_content">
                                                <h5 class="widget_title">Info@bypork.com</h5>
                                                <p class="widget_desc">Make a request</p>
                                            </div>
                                        </div><!-- widget-info end -->
                                        <!-- widget-info -->
                                        <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                            <div class="widget_icon"><i class="flaticon-worldwide"></i></div>
                                            <div class="widget_content">
                                                <h5 class="widget_title">Imo state, Nigeria</h5>
                                                <p class="widget_desc">Owerri</p>
                                            </div>
                                        </div><!-- widget-info end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                   <div class="ttm-custombutton">
                                       <a href="invest.php" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor">INVEST NOW</a>
                                    </div>
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                           <li><a href="index.php">Home</a></li>
                                           <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="pig-farming.php">Services</a>
                                                <ul>
                                                    <li><a href="pig-farming.php">Pig Farming & Processing</a></li>
                                                    <li><a href="charity-scheme.php">Our Charity Scheme</a></li>
                                                </ul>
                                            </li>
                                            <li class="active"><a href="contact-us.php">Contact Us</a></li>
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="faq.php">FAQ</a></li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->
        </header><!--header end-->

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box text-left">
                            <div class="page-title-heading">
                                <h1 class="title">Registration Sucesssful</h1>
                            </div><!-- /.page-title-captions -->
                            
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->
       

        <!--site-main start-->
        <div class="site-main">

            <!-- contactbox-section -->
            <section class="ttm-row contact-box-section ttm-bgcolor-grey clearfix">
                
                            
                <div class="container">
                    <div class="text-center">
                                <h6 class="mb-0">Hello! <?php echo ($_POST['fname']);?>, Please copy and share your referral link. </h6>
                                <p id="p1">http://bypork.com/special.php?refid=<?php echo ($_POST['refid']);?></p> 
                   <button onclick="copyToClipboard('#p1')">Copy link</button> 
                 <br/><br/>
                            </div>
                </div>
            </section>
            <!-- contactbox-section end -->
            <!-- contactbox-section -->
            <section class="ttm-row contact-form-section clearfix">
                <div class="container">
                    <div class="row"><!-- row -->
                        <div class="col-lg-12">
                            <!-- section title -->
                            <div class="section-title text-center clearfix">
                                <div class="title-header">
                                    <h5>JOIN OTHER BRAND REPS</h5>
                                    <h2 class="title">Connect To Bypork African Community</h2>
                                </div>
                                <div class="heading-seperator">
                                    <span></span>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <div class="row mt-30">
                        <div class="col-sm-6 offset-md-1 col-md-5 col-lg-3 offset-lg-3">
                            <!--  featured-icon-box --> 
                            <div class="featured-icon-box style6 left-icon icon-align-top">
                                <div class="featured-icon"><!--  featured-icon --> 
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="fa fa-whatsapp"></i><!--  ttm-icon --> 
                                    </div>
                                </div>
                                <div class="featured-content"><!--  featured-content -->
                                    <div class="featured-title"><!--  featured-title -->
                                        <a href="https://chat.whatsapp.com/EDLxpi23RznE5dyVhirXxw"><h5>What’s App group</h5></a>
                                    </div>
                                    <div class="featured-desc"><!--  featured-desc -->
                                        <p class="">bypork</p>
                                    </div>
                                </div>
                            </div><!--  featured-icon-box END -->
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-3">
                            <!--  featured-icon-box --> 
                            <div class="featured-icon-box style6 left-icon icon-align-top">
                                <div class="featured-icon"><!--  featured-icon --> 
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="fa fa-telegram"></i><!--  ttm-icon --> 
                                    </div>
                                </div>
                                <div class="featured-content"><!--  featured-content -->
                                    <div class="featured-title"><!--  featured-title -->
                                        <a href="t.me/bypork"><h5>Join Us</h5>
                                    </div>
                                    <div class="featured-desc"><!--  featured-desc -->
                                        <p class="">@bypork</p>
                                    </div>
                                </div>
                            </div><!--  featured-icon-box END -->
                </div>
            </section>
            <!-- contactbox-section end -->
            
            <!-- map-section end -->

        </div><!--site-main end-->

        <!--footer start-->
        <footer class="footer widget-footer clearfix">
            <div class="first-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cta_wrapper">
                                <div class="ttm-quicklink-box">
                                   <div class="ttm-leftlink-box">
                                       <h5 class="custom-heading"><a href="contact-us.php"> <span class="ti ti-arrow-circle-left ttm-arrow-box"></span> Visit Our Office</a></h5>
                                       <i class="flaticon flaticon-house ttm-textcolor-skincolor"></i>
                                  </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cta_wrapper">
                                <div class="ttm-quicklink-box">
                                   <div class="ttm-rightlink-box">
                                        <i class="fa fa-question-circle-o ttm-textcolor-skincolor"></i>
                                        <h5 class="custom-heading"><a href="faq.php"> FAQ <span class="ti ti-arrow-circle-right ttm-arrow-box"></span></a></h5>
                                  </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer ttm-textcolor-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text  clearfix">
                                <h3 class="widget-title"> About Bypork</h3>
                                <div class="">
                                    <p>Bypork is a pig farming entreprise with a social initiative to combat protein deficiency in Africa through pork production.</p>
                                    <hr>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right" href="map.php">Find Us On Map  <i class="ti ti-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget link-widget clearfix">
                               <h3 class="widget-title">Useful Links</h3>
                                <ul id="menu-footer-services">
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="pig-farming.php">Our Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text clearfix">
                                <h3 class="widget-title">Recent News</h3>
                                <ul class="widget-post ttm-recent-post-list">
                                    <li>
                                        <a href="single-blog.php"><img src="images/blog/06.jpg" alt="post-img"></a>
                                        <span class="post-date"><i class="fa fa-calendar"></i>July 20, 2020</span>
                                        <a href="raising-pigs.php">Raising Pigs</a>
                                    </li>
                                    <li>
                                        <a href="impact-of-agro.php"><img src="images/blog/07.jpg" alt="post-img"></a>
                                        <span class="post-date"><i class="fa fa-calendar"></i>July 13, 2020</span>
                                        <a href="impact-of-agro.php">Impact Of Agro-preneurship</a>
                                    </li>
                                    <li>
                                        <a href="single-blog.php"><img src="images/blog/04.jpg" alt="post-img"></a>
                                        <span class="post-date"><i class="fa fa-calendar"></i>July 07, 2020</span>
                                        <a href="pigs-for-wealth.php">Pigs For Wealth</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget contact-widget">
                                <h3 class="widget-title">Get in touch</h3>      
                                <ul class="contact-widget-wrapper">
                                    <li><i class="fa fa-map-marker"></i>Owerri west<br>Imo state, Nigeria.</li>
                                    <li><i class="fa fa-phone"></i>+234 8100 317 388 </li>
                                    <li><i class="fa fa-envelope-o"></i><a href="mailto:info@bypork.com" target="_blank">info@bypork.com</a></li>
                                </ul>
                                <div class="social-icons circle social-hover">
                                    <ul class="list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="facebook.com/bypork" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class="tooltip-top" target="_blank" href="twitter.com/bypork" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-instagram"><a class=" tooltip-top" target="_blank" href="instagram.com/bypork" data-tooltip="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="linkedin.com/" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text ttm-textcolor-white">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-12">
                            <div class="text-center">
                                <span>Copyright © 2020&nbsp;<a href="#">Bypork</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->

        <!-- Javascript -->

        <script src="js/jquery.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.js"></script>    
        <script src="js/jquery-waypoints.js"></script>    
        <script src="js/jquery-validate.js"></script> 
        <script src="js/slick.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/numinate.min6959.js?ver=4.9.3"></script>
        <script src="js/main.js"></script>

        <!-- Javascript end-->

        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <script>

            function initialize() {
                var latlng = new google.maps.LatLng(-34.397, 150.644);
                var myOptions = {
                    zoom: 8,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("map_canvas"),
                        myOptions);
            }
            google.maps.event.addDomListener(window, "load", initialize);

        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>

function copyToClipboard(element) { 
var $temp = $("<input>");
 $("body").append($temp);
 $temp.val($(element).text()).select(); 
document.execCommand("copy");
 $temp.remove();

 }


</script>

</body>

<!-- bypork.com -->
</html>