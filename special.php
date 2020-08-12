<?php

$refnum="8";
function getName ($refnum){
  $characters='123456789BYPRK';
  $randomString='';

  for ($i=0;$i<$refnum;$i++){
    $index = rand(0,strlen($characters)-1);
    $randomString .=$characters[$index];
  }
  return $randomString;
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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
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
                                                    <li><a href="twitter.com/byork.com"><i class="fa fa-twitter"></i></a>
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
                                            <li><a href="#">Services</a>
                                                <ul>
                                                    <li><a href="pig-farming.php">Pig Farming & Processing</a></li>
                                                    <li><a href="charity-scheme.php">Our Charity Scheme</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact-us.php">Contact Us</a></li>
                                            <li class="active"><a href="blog.php">Blog</a></li>
                                            
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
                                <h1 class="title">Single Service Details</h1>
                            </div><!-- /.page-title-captions -->
                            
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->
       

        <!--site-main start-->
        <div class="site-main">
        <!-- sidebar -->
        <div class="sidebar ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area">
                        <div class="ttm-single-product-details product">
                            <div class="ttm-single-product-info clearfix">
                                <div class="product-gallery images">
                                    <figure class="ttm-product-gallery__wrapper">
                                        <div class="product-gallery__image">
                                            <img class="img-fluid" src="images/product/product-two.jpg" alt="product-img">
                                        </div>
                                    </figure>
                                </div>
                                <div class="summary entry-summary">
                                    <h3 class="singel_product_title">Pig Farming And Processing</h3>
                
                                    <p class="price">
                                        <span class="Price-amount amount">
                                            <span class="Price-currencySymbol">NGN</span>100,000
                                        </span>
                                    </p>
                                    <div class="product-details__short-description">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                    </div>
                                    <div>
                                </div>
                            </div>
                            <div>
 <form role="form" method="post" action="sign-up-special-plan.php">
    <div class="row">
      <div class="span4">
        <input type="number" class="form-control" data-variavel="slot"  maxlength="1" value="1" name="slot" id="slot" min="1" max="5" required>
      </div>
      <div class="span4">
        <button id="go" name="add-to-cart" type="submit" class="cart_button ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey" title="Submit now">INVEST</button>
      </div>
      <div class="span4">
        <input type="hidden" class="form-control" data-variavel="price" name="price" id="price" value="100000" required>
      </div>
      <div class="span4">
        <input type="hidden" class="form-control" data-variavel="interest" value="20000" required>
      </div>
      
      <div class="span4">
        <input type="hidden" class="form-control" data-variavel="roi" value="120000" required>
      </div>
      <div class="span4">
        <input type="text" name="amount" id="amount" class="form-control" data-formula="#slot# * #price#" placeholder="100000" required readonly>
      </div>
      <div class="span4">
        <label >ROI
        </label>
        <input type="text" class="form-control" data-formula="#roi# * #slot#" placeholder="120000" readonly>
      </div>
      <div>
          <input type="hidden" name="refnum" id="refnum" value="<?php echo getName ($refnum);?>">
      </div>
      <div>
          <input type="hidden" name="refid" id="refid" value="<?php echo($_GET['refid']);?>">
      </div>
    </div>
    </div>
  </form>
                            </div>
                            <div class="ttm-tabs tabs-for-single-products" data-effect="fadeIn">
                                <ul class="tabs clearfix">
                                    <li class="tab active"><a href="#">Amount</a></li>
                                    <li class="tab"><a href="#">Interest</a></li>
                                    <li class="tab"><a href="#">ROI</a></li>
                                </ul>
                                <div class="content-tab ttm-bgcolor-white">
                                    <!-- content-inner -->
                                    <div class="content-inner active">
                                        <h2>Description</h2>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                    </div><!-- content-inner end-->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <h2>Additional information</h2>
                                        <table class="shop_attributes">
                                            <tbody><tr><th>color</th><td><p>Blue</p></td></tr></tbody>
                                        </table>
                                    </div><!-- content-inner end-->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <div id="reviews" class="woocommerce-Reviews">
                                            <div id="comments">
                                                <h2 class="woocommerce-Reviews-title">1 review for <span>Beanie with Logo</span></h2>
                                                <ol class="commentlist">
                                                    <li class="review">
                                                        <div class="comment_container">
                                                            <img class="avatar" src="images/blog/blog-comment-01.jpg" alt="comment-img">
                                                            <div class="comment-text">
                                                                <div class="ttm-ratting-star float-right"><!-- ratting-star -->
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <p class="meta">
                                                                    <strong class="eview__author">Cherie </strong><span class="review__dash">–</span>
                                                                    <time class="woocommerce-review__published-date" datetime="2018-11-01T04:58:58+00:00">November 1, 2018</time>
                                                                </p>
                                                                <div class="description">
                                                                    <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante<br>Very good product and amazing quality.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                            <div id="review_form_wrapper">
                                                <div class="comment-respond">
                                                    <span class="comment-reply-title">Add a review
                                                        <small><a rel="nofollow" id="cancel-comment-reply-link" href="#">Cancel reply</a></small>
                                                    </span>
                                                    <form action="#" method="post" id="commentform" class="comment-form">
                                                        <p class="comment-notes">
                                                            <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                                        </p>
                                                        <div class="comment-form-rating">
                                                            <label>Your rating</label>
                                                            <ul class="stars">
                                                                <li class="fa fa-star-o"></li>
                                                                <li class="fa fa-star-o"></li>
                                                                <li class="fa fa-star-o"></li>
                                                                <li class="fa fa-star-o"></li>
                                                                <li class="fa fa-star-o"></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Your review*</label>
                                                                    <textarea name="Massage" rows="3" placeholder="" required="required" class="form-control with-border"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Name*</label>
                                                                    <input name="name" type="text" class="form-control with-border" placeholder="" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Email*</label>
                                                                    <input name="email" type="text" placeholder="" required="required" class="form-control with-border">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <input id="comment-cookies-consent" name="comment-cookies-consent" type="checkbox" value="yes">
                                                                <label for="comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group text-left mt-30">
                                                                    <button type="submit" id="submit" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-darkgrey" value="">
                                                                        Submit
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="related products">
                            <h3>Related products</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product"><!-- product -->
                                        <div class="product-thumbnail"><!-- product-thumbnail -->
                                            <img class="img-fluid w-100" src="images/product/product-one.jpg" alt="">
                                            <div class="ttm-shop-icon"><!-- ttm-shop-icon -->
                                                <div class="product-btn add-to-cart-btn"><a href="#">ADD TO CART</a></div>
                                            </div>
                                        </div><!-- product-thumbnail end -->
                                        <div class="product-content text-left"><!-- product-content -->
                                            <div class="product-title"><!-- product-title -->
                                                <h2><a href="product-details.html">Album</a></h2>
                                            </div>
                                            <div class="ttm-ratting-star"><!-- ratting-star -->
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="product-price"><!-- product-Price -->
                                                <span class="product-Price-currencySymbol">$</span>16.00
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product"><!-- product -->
                                        <div class="product-thumbnail"><!-- product-thumbnail -->
                                            <span class="onsale">Sale!</span>
                                            <img class="img-fluid w-100" src="images/product/product-two.jpg" alt="">
                                            <div class="ttm-shop-icon"><!-- ttm-shop-icon -->
                                                <div class="product-btn add-to-cart-btn"><a href="#">ADD TO CART</a></div>
                                            </div>
                                        </div><!-- product-thumbnail end -->
                                        <div class="product-content text-left"><!-- product-content -->
                                            <div class="product-title"><!-- product-title -->
                                                <h2><a href="product-details.html">Beanie with Logo</a></h2>
                                            </div>
                                            <div class="ttm-ratting-star"><!-- ratting-star -->
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="product-price"><!-- product-Price -->
                                                <span class="product-Price-currencySymbol">
                                                    <del><span class="product-Price-amount">
                                                            <span class="product-Price-currencySymbol">$</span>20.00
                                                        </span>
                                                    </del>
                                                    <ins><span class="product-Price-amount">
                                                            <span class="product-Price-currencySymbol">$</span>18.00
                                                        </span>
                                                    </ins>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product"><!-- product -->
                                        <div class="product-thumbnail"><!-- product-thumbnail -->
                                            <img class="img-fluid w-100" src="images/product/product-three.jpg" alt="">
                                            <div class="ttm-shop-icon"><!-- ttm-shop-icon -->
                                                <div class="product-btn add-to-cart-btn"><a href="#">ADD TO CART</a></div>
                                            </div>
                                        </div><!-- product-thumbnail end -->
                                        <div class="product-content text-left"><!-- product-content -->
                                            <div class="product-title"><!-- product-title -->
                                                <h2><a href="product-details.html">Belt</a></h2>
                                            </div>
                                            <div class="ttm-ratting-star"><!-- ratting-star -->
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="product-price"><!-- product-Price -->
                                                <span class="product-Price-currencySymbol">$</span>16.00
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 widget-area">
                        <aside class="widget widget-search">
                            <form role="search" method="get" class="search-form" action="#">
                                <div class="form-group">
                                    <input name="search" type="text" class="form-control with-border" placeholder="Search....">
                                    <i class="fa fa-search"></i>
                                </div>
                            </form>
                        </aside>
                        <aside class="widget widget-categories">
                                <h3 class="widget-title">Product Categories</h3>
                                <ul>
                                    <li><a href="#">Dairy Farm</a><span>4</span></li>
                                    <li><a href="#">Flower</a><span>2</span></li>
                                    <li><a href="#">Gardening</a><span>1</span></li>
                                    <li><a href="#">Tips &amp; Tricks</a><span>4</span></li>
                                    <li><a href="#">Watering Plants</a><span>2</span></li>
                                </ul>
                            </aside>
                        <aside class="widget widget-top-rated-products">
                            <h3 class="widget-title">Popular Product</h3>
                            <ul class="">
                                <li class="clearfix">
                                    <a href="#"><img src="images/product/product-one.jpg" alt="">
                                        <span class="product-title">Corn Tree</span>
                                    </a>
                                    <div class="ttm-ratting-star"><!-- ratting-star -->
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="product-Price-amount amount"><span class="product-Price-currencySymbol">$</span>33.00</span>
                                </li>
                                <li class="clearfix">
                                    <a href="#"><img src="images/product/product-two.jpg" alt="">
                                        <span class="product-title">Fresh Okra</span>
                                    </a>
                                    <div class="ttm-ratting-star"><!-- ratting-star -->
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="product-Price-amount amount">
                                        <span class="product-Price-currencySymbol">
                                                <del><span class="product-Price-amount">
                                                        <span class="product-Price-currencySymbol">$</span>50.00
                                                    </span>
                                                </del>
                                                <ins><span class="product-Price-amount">
                                                        <span class="product-Price-currencySymbol">$</span>40.00
                                                    </span>
                                                </ins>
                                            </span>
                                    </span>
                                </li>
                                <li class="clearfix">
                                    <a href="#"><img src="images/product/product-eight.jpg" alt="">
                                        <span class="product-title">Green Broccoli</span>
                                    </a>
                                    <div class="ttm-ratting-star"><!-- ratting-star -->
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="product-Price-amount amount"><span class="product-Price-currencySymbol">$</span>33.00</span>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget tagcloud-widget">
                            <h3 class="widget-title">Tags</h3>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">Bulbsplant</a>
                                <a href="#" class="tag-cloud-link">Care</a>
                                <a href="#" class="tag-cloud-link">Farm</a>
                                <a href="#" class="tag-cloud-link">Gardening</a>
                                <a href="#" class="tag-cloud-link">Gardens</a>
                                <a href="#" class="tag-cloud-link">Landscaping</a>
                                <a href="#" class="tag-cloud-link">Planting</a>
                                <a href="#" class="tag-cloud-link">Seed Saving</a>
                            </div>
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->
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
                                       <h5 class="custom-heading"><a href="#"> <span class="ti ti-arrow-circle-left ttm-arrow-box"></span> Find Our Nearest Office</a></h5>
                                       <i class="flaticon flaticon-house ttm-textcolor-skincolor"></i>
                                  </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ttm-custom-ctabox">
                                <div class="cta-bg-icon"><span class="flaticon-support"></span></div>
                                <h3 class="ttm-cta-heading ttm-textcolor-skincolor">Call Us On</h3>
                                <h5 class="ttm-cta-content">+123 456 789 0012</h5>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cta_wrapper">
                                <div class="ttm-quicklink-box">
                                   <div class="ttm-rightlink-box">
                                        <i class="flaticon flaticon-clock ttm-textcolor-skincolor"></i>
                                        <h5 class="custom-heading"><a href="#"> Emergency Restorations <span class="ti ti-arrow-circle-right ttm-arrow-box"></span></a></h5>
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
                                <h3 class="widget-title"> About</h3>
                                <div class="">
                                    <p> bundled Html Template for who is passionate about farming and agriculture, gardening services related websites.</p>
                                    <p>For everyone who is passionate about agro services, farm nurseries, farming & gardening tools suppliers and blogs.</p>
                                    <hr>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right" href="#">Find Us On Map  <i class="ti ti-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget link-widget clearfix">
                               <h3 class="widget-title">Useful Links</h3>
                                <ul id="menu-footer-services">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Nomadic Herding</a></li>
                                    <li><a href="#">Veterinary Services</a></li>
                                    <li><a href="#">Commercial Plant</a></li>
                                    <li><a href="#">Farm Labor Management</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text clearfix">
                                <h3 class="widget-title">Recent News</h3>
                                <ul class="widget-post ttm-recent-post-list">
                                    <li>
                                        <a href="single-blog.html"><img src="images/blog/01.jpg" alt="post-img"></a>
                                        <span class="post-date"><i class="fa fa-calendar"></i>May 01, 2019</span>
                                        <a href="single-blog.html">Outdoor Vintage Flower Garden Decor</a>
                                    </li>
                                    <li>
                                        <a href="single-blog.html"><img src="images/blog/02.jpg" alt="post-img"></a>
                                        <span class="post-date"><i class="fa fa-calendar"></i>May 03, 2019</span>
                                        <a href="single-blog.html">Grow Your Own Yard Garden For Better Life</a>
                                    </li>
                                    <li>
                                        <a href="single-blog.html"><img src="images/blog/03.jpg" alt="post-img"></a>
                                        <span class="post-date"><i class="fa fa-calendar"></i>May 05, 2019</span>
                                        <a href="single-blog.html">Rural Infrastructure for Great Agriculture</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget contact-widget">
                                <h3 class="widget-title">Get in touch</h3>      
                                <ul class="contact-widget-wrapper">
                                    <li><i class="fa fa-map-marker"></i>4789 Melmorn Street,Zakila Ton <br> Mashintron Town</li>
                                    <li><i class="fa fa-phone"></i>(+01) 123 456 7890 </li>
                                    <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com" target="_blank">info@example.com</a></li>
                                </ul>
                                <div class="social-icons circle social-hover">
                                    <ul class="list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-flickr"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!--footer start-->
        <footer class="footer widget-footer clearfix">
            <div class="bottom-footer-text ttm-textcolor-white">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-12">
                            <div class="text-center">
                                <span>Copyright © <?php echo date ("Y");?>&nbsp;<a href="bypork.php">Bypork</a></span>
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
        <script src="js/calcput.js"></script>
        <script src="js/pluginlaunch2.js"></script>
        <script src="assets/js/plugin.js"></script>
        <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
        <script src="js/jquery.formula.js"></script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        <!-- Javascript end-->










</body>


</html>