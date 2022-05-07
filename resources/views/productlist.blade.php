<?php 
use App\Models\Product;
use App\Models\Category;
use App\Models\Dosing;
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>tipa </title>
        <meta name="description" content="H-Code - A premium portfolio template from ThemeZaa">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- animation --> 
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap --> 
        <link rel="stylesheet" href="css/bootstrap.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" href="css/extralayers.css" />
        <link rel="stylesheet" href="css/settings.css" />
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css" />
        <link rel="stylesheet" href="css/owl.transitions.css" />
        <link rel="stylesheet" href="css/full-slider.css" />
        <!-- text animation -->
        <link rel="stylesheet" href="css/text-effect.css" />
        <!-- hamburger menu  -->
        <link rel="stylesheet" href="css/menu-hamburger.css" />
        <!-- common -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- responsive -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE]>
            <link rel="stylesheet" href="css/style-ie.css" />
        <![endif]-->
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- navigation panel -->
        <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-border-bottom" role="navigation">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-md-2 pull-left"><a class="logo-light" href="index.html"><img alt="" src="images/logo-light.png" class="logo" /></a><a class="logo-dark" href="index.html"><img alt="" src="images/logo-light.png" class="logo" /></a></div>
                    <!-- end logo -->
                    <!-- search and cart  -->
                    <div class="col-md-2 no-padding-left search-cart-header pull-right">
                        <div id="top-search">
                            <!-- nav search -->
                            <a href="#search-header" class="header-search-form"><i class="fa fa-search search-button"></i></a>
                            <!-- end nav search -->
                        </div>
                        <!-- search input-->
                        <form id="search-header" method="post" action="#" name="search-header" class="mfp-hide search-form-result">
                            <div class="search-form position-relative">
                                <button type="submit" class="fa fa-search close-search search-button"></button>
                                <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                            </div>
                        </form>
                        <!-- end search input -->
                        <div class="top-cart">
                            <!-- nav shopping bag -->
                            <a href="#" class="shopping-cart">
                                <i class="fa fa-globe"></i>
                                <div class="subtitle">English</div>
                            </a>
                            <!-- end nav shopping bag -->
                            <!-- shopping bag content -->
                            <div class="cart-content">
                                
                                <p class="buttons">
                                    <a href="#" class="btn btn-very-small-white no-margin-bottom margin-seven pull-left no-margin-lr">English</a>
                                    <a href="#" class="btn btn-very-small-white no-margin-bottom margin-seven no-margin-right pull-right">Arabic</a>
                                </p>
                            </div>
                            <!-- end shopping bag content -->
                        </div>
                    </div>
                    <!-- end search and cart  -->
                    <!-- toggle navigation -->
                    <div class="navbar-header col-sm-8 col-xs-2 pull-right">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <!-- toggle navigation end -->
                    <!-- main menu -->
                    <div class="col-md-8 no-padding-right accordion-menu text-right">
                        <div class="navbar-collapse collapse">
                            <ul id="accordion" class="nav navbar-nav navbar-right panel-group">
                                <!-- menu item -->
                                <li class="dropdown panel">
                                    <a href="#" class="dropdown-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-hover="dropdown">About  <i class="fa fa-angle-down"></i></a>
                                    <!-- sub menu -->
                                    
                                    <!-- end sub menu -->
                                </li>
                                <!-- end menu item -->
                                <!-- menu item -->
                                <li class="dropdown panel">
                                    <a href="#" class="dropdown-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-hover="dropdown">PRODUCTS <i class="fa fa-angle-down"></i></a>
                                    <!-- sub menu -->
                                    
                                    <!-- end sub menu -->
                                </li>
                                <!-- end menu item -->
                                <!-- menu item -->
                                <li class="dropdown panel">
                                    <a href="#" class="dropdown-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-hover="dropdown">EXPORT <i class="fa fa-angle-down"></i></a>
                                    <!-- sub menu -->
                                    
                                    <!-- end sub menu -->
                                </li>
                                <!-- end menu item -->
                                <!-- menu item -->
                                <li class="dropdown panel">
                                    <a href="#" class="dropdown-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-hover="dropdown">Projects & News<i class="fa fa-angle-down"></i></a>
                                    <!-- sub menu -->
                                    
                                    <!-- end sub menu -->
                                </li>
                                <!-- end menu item -->
                                <!-- menu item -->
                                <li class="dropdown panel">
                                    <a href="#collapse3" class="dropdown-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-hover="dropdown">contacts <i class="fa fa-angle-down"></i></a>
                                    <!-- sub menu -->
                                    
                                    <!-- end sub menu -->
                                </li>
                                <!-- end menu item -->
                                <!-- menu item -->
                                
                                <!-- end menu item -->
                                <!-- menu item -->
                               
                                <!-- end menu item -->
                            </ul>
                        </div>
                    </div>
                    <!-- end main menu -->
                </div>
            </div>
        </nav>
        <!--end navigation panel --> 

        <!-- head section -->
        <section class="page-title parallax6 parallax-fix page-title-large">
            <img class="parallax-background-img" src="images/Vineyards-headerweb.jpg" alt="" />
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center animated fadeInUp">
                        <div class="separator-line bg-yellow no-margin-top margin-four"></div>
                        <!-- page title -->
                        <h1 class="black-text">Products
</h1>
                        <!-- end page title -->
                        <!-- page title tagline -->
                      
                        <!-- end title tagline -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end head section -->











      

        <!-- content section -->
        <!-- portfolio section -->
        <section class="work-2col gutter work-with-title no-margin-top content-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 grid-gallery overflow-hidden">
                        <div class="tab-content">
                            <!-- work grid -->
                            <ul class="grid masonry-items">
                                <!-- work item ( external page ) -->
                                @foreach ($categories as $category)
                                    <li class="html jquery wordpress">
                                        <figure>
                                            <div class="gallery-img"><a href="/{{$category->name}}"><img src="CatImg/{{$category->pic}}" alt=""></a></div>
                                            <figcaption>
                                
                                                <h3 class="titelbox"><a href="/{{$category->name}}">{{$category->name}}</a></h3>
                                                <p class="textbox">{{$category->description}}</p>
                                                <a class="text-small highlight-link text-uppercase bg-black white-text" href="/{{$category->name}}"> Go to {{$category->name}} <i class="fa fa-long-arrow-right extra-small-icon white-text"></i></a>

                                            </figcaption>
                                        </figure>
                                    </li> 
                                @endforeach
                                <!-- end work item -->
                            </ul>
                            <!-- end work grid -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end portfolio section -->
        <!-- end content section -->

        <!-- main project images -->
        @foreach ($categories as $category)
        <section id="packages" class="work-4col gutter work-with-title wide wide-title no-margin-top content-section no-padding-bottom xs-onepage-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center no-padding margin-five no-margin-top sm-margin-bottom-ten">
                        <h1> {{$category->name}}</h1>
                    </div>
                </div>
                <div class="row">
                  
                    <div class="col-md-12 grid-gallery overflow-hidden no-padding">
                        <div class="tab-content">
                            <!-- tour grid -->
                            <ul class="grid masonry-items" style="position: relative; height: 840px;">
                                <!-- tour item -->
                                @foreach ($category->products as $p)
                                <li class="holidays luxury safari" style="position: absolute; left: 0px; top: 0px;">
                                    <figure>
                                        <div class="gallery-img"><a href="#"><img src="/storage/ProductImg/{{$p->pic}}" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="#">{{$p->name}}</a></h3>
                                            <p>{{$p->description}}</p>
                                            <a class="text-small highlight-link text-uppercase bg-black white-text tex2" href="services.html">{{$p->name}}<i class="fa fa-long-arrow-right extra-small-icon white-text"></i></a>
                                        </figcaption>
                                    </figure>
                                </li>
                                @endforeach
                                <!-- end tour item -->

        <section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
        @endforeach
        <br><br><br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-10 center-col text-center margin-ten no-margin-top">
                        <h6 class="no-margin-top margin-ten xs-margin-bottom-seven"><strong class="black-text">Accordion Style #1</strong></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 center-col">
                        <!-- accordion -->
                        <div class="panel-group accordion-style1" id="accordion-one">
                            <!-- accordion item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   
                                    <a data-toggle="collapse" data-parent="#accordion-one" href="#accordion-one-link1" class="collapsed"><h4 class="panel-title">Filter by nutrient, application type and product range<span class="pull-right"><i class="fa fa-plus"></i></span></h4></a>
                                </div>
                                <div id="accordion-one-link1" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="row">
                                        <form>
                                            <div class="col-md-12 col-sm-10 center-col">
                                                <div class="col-md-4 col-sm-4 xs-margin-bottom-five">
                                                    <h1 class="titell">Nutrient</h1>
                                                    <div class="radio">
                                                        <!-- radio button  -->
                                                        <label><input type="radio" checked="checked" id="optionsRadios1" name="optionsRadios"> New York</label>
                                                        <!-- end radio button  -->
                                                    </div>
                                                    <div class="radio">
                                                        <!-- radio button  -->
                                                        <label><input type="radio" id="optionsRadios2" name="optionsRadios"> London</label>
                                                        <!-- end radio button  -->
                                                    </div>
                                                    <div class="radio">
                                                        <!-- radio button  -->
                                                        <label><input type="radio" id="optionsRadios3" name="optionsRadios"> Berlin</label>
                                                        <!-- end radio button  -->
                                                    </div>
                                                    <div class="radio disabled">
                                                        <!-- radio button - disabled  -->
                                                        <label><input type="radio" id="optionsRadios4" name="optionsRadios" disabled=""> Disabled</label>
                                                        <!-- end radio button  -->
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 xs-margin-bottom-five">
                                                    <h1 class="titell">Nutrient</h1>
                                                    <div class="checkbox">
                                                        <!-- checkbox  -->
                                                        <label><input type="checkbox" name="optionsCheckbox"> Contemporary</label>
                                                        <!-- end checkbox  -->
                                                    </div>
                                                    <div class="checkbox">
                                                        <!-- checkbox  -->
                                                        <label><input type="checkbox" name="optionsCheckbox"> Plastic</label>
                                                        <!-- end checkbox  -->
                                                    </div>
                                                    <div class="checkbox">
                                                        <!-- checkbox  -->
                                                        <label><input type="checkbox" name="optionsCheckbox"> Outdoor</label>
                                                        <!-- end checkbox  -->
                                                    </div>
                                                    <div class="checkbox disabled">
                                                        <!-- checkbox  -->
                                                        <label><input type="checkbox" name="optionsCheckbox" disabled=""> Disabled</label>
                                                        <!-- end checkbox  -->
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 xs-margin-bottom-five">
                                                    <h1 class="titell">Nutrient</h1>
                                                    <div class="checkbox">
                                                        <!-- checkbox  -->
                                                        <label><input type="checkbox" name="optionsCheckbox"> Contemporary</label>
                                                        <!-- end checkbox  -->
                                                    </div>
                                                    <div class="checkbox">
                                                        <!-- checkbox  -->
                                                        <label><input type="checkbox" name="optionsCheckbox"> Plastic</label>
                                                        <!-- end checkbox  -->
                                                    </div>
                                                    <div class="checkbox">
                                                        <!-- checkbox  -->
                                                        <label><input type="checkbox" name="optionsCheckbox"> Outdoor</label>
                                                        <!-- end checkbox  -->
                                                    </div>
                                                    <div class="checkbox disabled">
                                                        <!-- checkbox  -->
                                                        <label><input type="checkbox" name="optionsCheckbox" disabled=""> Disabled</label>
                                                        <!-- end checkbox  -->
                                                    </div>
                                                </div>
                                                <a class="text-small highlight-link text-uppercase bg-black white-text" href="services.html">Apply filters <i class="fa fa-long-arrow-right extra-small-icon white-text"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                          
                            <!-- end accordion item -->
                        </div>
                        <!-- end accordion -->
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 bg-fast-yellow padding-three text-center">
                        <span class="text-small text-uppercase font-weight-600 black-text letter-spacing-2 ni">Algae Solutions</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 shop-cart-table">
                        <table class="table shop-cart text-center">
                            <thead>
                              
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail text-left">
                                        <a href="#"><img src="images/product27.jpg" alt=""></a>
                                    </td>
                                    <td class="text-left">
                                        <a href="#"> FoliaStim Mix TE Liquid</a>
                                       
                                    </td>
                                    <td class="product-quantity">
                                        <div class="checkbox">
                                            <!-- checkbox  -->
                                            <label><input type="checkbox" name="optionsCheckbox">leaflet</label>
                                            <!-- end checkbox  -->
                                        </div>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="checkbox">
                                            <!-- checkbox  -->
                                            <label><input type="checkbox" name="optionsCheckbox"> tds</label>
                                            <!-- end checkbox  -->
                                        </div>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="checkbox">
                                            <!-- checkbox  -->
                                            <label><input type="checkbox" name="optionsCheckbox">msds</label>
                                            <!-- end checkbox  -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail text-left">
                                        <a href="#"><img src="images/product27.jpg" alt=""></a>
                                    </td>
                                    <td class="text-left">
                                        <a href="#"> FoliaStim Mix TE Liquid</a>

                                    </td>
                                    <td class="product-quantity">
                                        <div class="checkbox">
                                            <!-- checkbox  -->
                                            <label><input type="checkbox" name="optionsCheckbox">leaflet</label>
                                            <!-- end checkbox  -->
                                        </div>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="checkbox">
                                            <!-- checkbox  -->
                                            <label><input type="checkbox" name="optionsCheckbox"> tds</label>
                                            <!-- end checkbox  -->
                                        </div>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="checkbox">
                                            <!-- checkbox  -->
                                            <label><input type="checkbox" name="optionsCheckbox">msds</label>
                                            <!-- end checkbox  -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail text-left">
                                        <a href="#"><img src="images/product27.jpg" alt=""></a>
                                    </td>
                                    <td class="text-left">
                                        <a href="#"> FoliaStim Mix TE Liquid</a>

                                    </td>
                                    <td class="product-quantity">
                                        <div class="checkbox">
                                            <!-- checkbox  -->
                                            <label><input type="checkbox" name="optionsCheckbox">leaflet</label>
                                            <!-- end checkbox  -->
                                        </div>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="checkbox">
                                            <!-- checkbox  -->
                                            <label><input type="checkbox" name="optionsCheckbox"> tds</label>
                                            <!-- end checkbox  -->
                                        </div>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="checkbox">
                                            <!-- checkbox  -->
                                            <label><input type="checkbox" name="optionsCheckbox">msds</label>
                                            <!-- end checkbox  -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail text-left">
                                        <a href="shop-single-product.html"><img src="images/product27.jpg" alt=""></a>
                                    </td>
                                    <td class="text-left">
                                        <a href="#"> FoliaStim Mix TE Liquid</a>

                                    </td>
                                    <td class="product-quantity">
                                        <div class="checkbox">
                                            <!-- checkbox  -->
                                            <label><input type="checkbox" name="optionsCheckbox">leaflet</label>
                                            <!-- end checkbox  -->
                                        </div>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="checkbox">
                                            <!-- checkbox  -->
                                            <label><input type="checkbox" name="optionsCheckbox"> tds</label>
                                            <!-- end checkbox  -->
                                        </div>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="checkbox">
                                            <!-- checkbox  -->
                                            <label><input type="checkbox" name="optionsCheckbox">msds</label>
                                            <!-- end checkbox  -->
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                
                </div>
            </div>
        </section>

        <!-- footer -->
        <footer>
            <div class=" bg-white footer-top">
                <div class="container">
                    <div class="row margin-four">
                        <!-- phone -->
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-phone small-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">123-456-7890</h6></div>
                        <!-- end phone -->
                        <!-- address -->
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-map-pin small-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">Victoria, United States</h6></div>
                        <!-- end address -->
                        <!-- email -->
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-envelope small-icon black-text"></i><h6 class="margin-two no-margin-bottom"><a href="mailto:no-reply@domain.com" class="black-text">no-reply@domain.com</a></h6></div>
                        <!-- end email -->
                    </div>
                </div>
            </div>
            <div class="container footer-middle">
                <div class="row">
                    <div class="col-md-3 col-sm-3 footer-link1 xs-display-none">
                        <!-- headline -->
                        <h5>About Us</h5>
                        <!-- end headline -->
                        <!-- text -->
                        <p class="footer-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <!-- end text -->
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4 footer-link2 col-md-offset-3">
                        <!-- headline -->
                        <h5>Company</h5>
                        <!-- end headline -->
                        <!-- link -->
                        <ul>
                            <li><a href="#">About Company</a></li>
                            <li><a href="#">What We Do</a></li>
                            <li><a href="#">What We Think</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                        <!-- end link -->
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  footer-link3">
                        <!-- headline -->
                        <h5>Services</h5>
                        <!-- end headline -->
                        <!-- link -->
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Graphic Design</a></li>
                            <li><a href="#">Copywriting</a></li>
                            <li><a href="#">Online Marketing</a></li>
                        </ul>
                        <!-- end link -->
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  footer-link4">
                        <!-- headline -->
                        <h5>Introduction</h5>
                        <!-- end headline -->
                        <!-- link -->
                        <ul>
                            <li><a href="#">Team Members</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Our Clients</a></li>
                            <li><a href="#">Careers With Us</a></li>
                        </ul>
                        <!-- end link -->
                    </div>
                </div>
                <div class="wide-separator-line bg-mid-gray no-margin-lr margin-three no-margin-bottom"></div>
                <div class="row margin-four no-margin-bottom">
                    <div class="col-md-6 col-sm-12 sm-text-center sm-margin-bottom-four">
                        <!-- link -->
                        
                        <div class="row margin-three">

                            <div class="col-md-6 col-sm-6 col-xs-12 footer-logo text-right xs-text-center">
                                <a href="#"><img src="images/logo-light.png" alt="" /></a>
                            </div>
                            <!-- copyright -->
                            <div class="col-md-6 col-sm-6 col-xs-12 copyright text-left letter-spacing-1 xs-text-center xs-margin-bottom-one">
                                © 2021 <a href="#">NAHRDEV</a> . ALL RIGHTS RESERVED
                            </div>
                            <!-- end copyright -->
                            <!-- logo -->
                            <!-- end logo -->
                        </div>
                        
                        <!-- end link -->
                    </div>
                    <div class="col-md-6 col-sm-12 footer-social text-right sm-text-center">
                        <br />
                        <!-- social media link -->
                        <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                        <!-- end social media link -->
                    </div>
                </div>
            </div>
            
            <!-- scroll to top --> 
            <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a> 
            <!-- scroll to top End... --> 
        </footer>
        <!-- end footer -->

        <!-- javascript libraries / javascript files set #1 --> 
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script> 
        <script type="text/javascript" src="js/bootstrap-hover-dropdown.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
        <script type="text/javascript" src="js/skrollr.min.js"></script>  
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
         <!-- jquery appear -->
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="js/page-scroll.js"></script>
        <!-- easy piechart-->
        <script type="text/javascript" src="js/jquery.easypiechart.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <!--portfolio with shorting tab --> 
        <script type="text/javascript" src="js/jquery.isotope.min.js"></script> 
        <!-- owl slider  -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <!-- magnific popup  -->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/popup-gallery.js"></script>
        <!-- text effect  -->
        <script type="text/javascript" src="js/text-effect.js"></script>
        <!-- revolution slider  -->
        <script type="text/javascript" src="js/jquery.tools.min.js"></script>
        <script type="text/javascript" src="js/jquery.revolution.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="js/counter.js"></script>
         <!-- countTo -->
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <!-- fit videos  -->
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <!-- imagesloaded  -->
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <!-- hamburger menu-->
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <!-- setting --> 
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
