<?php

include('sql/conn.php');

$info = get_info();

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Galleries</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="user-scalable=0,width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
        <meta name="description" content="">
        <meta name="keywords" content="">
        <!-- CSS FILES -->
        <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/colors.css" rel="stylesheet" type="text/css">
        <link href="css/colorbox.css" rel="stylesheet" type="text/css">
        <link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css">
        <link href="css/media.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <!-- SUB MENU -->
        <?php include('nav.php'); ?>
        <div class="clear"></div>
        
        <!-- HEADER -->
        <header id="header">
            <div class="logo">
                <img src="<?php print($info['iconPath']) ?>" alt="" />
                <span><?php print($info['title']) ?></span>
            </div>
        </header>
        <div class="clear"></div>
        
        <!-- MAIN MENU -->
        <?php include('menu.php'); ?>
        
        <!-- MAIN CONTAINER -->
        <section class="maincontainer">
            <!-- PAGE TITLE -->
            <div class="page-title">Galleries</div>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer">
                <!--vertical Tabs-->
                <div id="verticalTab">
                    <ul class="resp-tabs-list">
                        <li>Gallery</li>
                        <li>Another Gallery</li>
                        <li>Gallery without filters</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div>
                            <!-- FILTERS -->
                            <ul id="filters1" class="filters">
                                <li>
                                    <a href="galleries.html#" data-filter="all" class="active">All</a>
                                </li>
                                <li>
                                    <a href="galleries.html#" data-filter="photos">Photos</a>
                                </li>
                                <li>
                                    <a href="galleries.html#" data-filter="videos">Videos</a>
                                </li>
                                <li>
                                    <a href="galleries.html#" data-filter="links">Links</a>
                                </li>
                            </ul>
                            <div class="clear"></div>
                            <!-- GALLERY -->
                            <ul id="gridbox1" class="team-gallery">
                                <li data-filter="photos">
                                    <a class="clb-photo" href="images/photos/l4.jpg" data-rel="photos">
                                        <img src="images/photos/s4.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="videos">
                                    <a class="clb-iframe" href="http://www.youtube.com/embed/1iIZeIy7TqM">
                                        <img src="images/photos/t4.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="videos">
                                    <a class="clb-iframe" href="http://player.vimeo.com/video/70301553">
                                        <img src="images/photos/t5.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="photos">
                                    <a class="clb-photo" href="images/photos/l6.jpg" data-rel="photos">
                                        <img src="images/photos/s6.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="links">
                                    <a class="clb-link" href="http://www.themeforest.com" target="_blank">
                                        <img src="images/photos/t6.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="photos">
                                    <a class="clb-photo" href="images/photos/l5.jpg" data-rel="photos">
                                        <img src="images/photos/s5.jpg" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <!-- FILTERS 2 -->
                            <ul id="filters2" class="filters">
                                <li>
                                    <a href="galleries.html#" data-filter="all" class="active">All</a>
                                </li>
                                <li>
                                    <a href="galleries.html#" data-filter="photos">Photos</a>
                                </li>
                                <li>
                                    <a href="galleries.html#" data-filter="videos">Videos</a>
                                </li>
                                <li>
                                    <a href="galleries.html#" data-filter="links">Links</a>
                                </li>
                            </ul>
                            <div class="clear"></div>
                            <!-- GALLERY 2 -->
                            <ul id="gridbox2" class="team-gallery">
                                <li data-filter="photos">
                                    <a class="clb-photo" href="images/photos/l1.jpg" data-rel="photos2">
                                        <img src="images/photos/s1.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="videos">
                                    <a class="clb-iframe" href="http://www.youtube.com/embed/1iIZeIy7TqM">
                                        <img src="images/photos/t1.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="photos">
                                    <a class="clb-photo" href="images/photos/l2.jpg" data-rel="photos2">
                                        <img src="images/photos/s2.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="videos">
                                    <a class="clb-iframe" href="http://www.dailymotion.com/embed/video/x143vp2">
                                        <img src="images/photos/t2.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="photos">
                                    <a class="clb-photo" href="images/photos/l3.jpg" data-rel="photos2">
                                        <img src="images/photos/s3.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="links">
                                    <a class="clb-link" href="http://www.themeforest.com" target="_blank">
                                        <img src="images/photos/t3.jpg" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <!-- GALLERY WITHOUT FILTERS -->
                            <ul class="team-gallery">
                            <li>
                                <a class="clb-photo" href="images/photos/l5.jpg" data-rel="photos3">
                                    <img src="images/photos/s5.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-iframe" href="http://www.youtube.com/embed/1iIZeIy7TqM">
                                    <img src="images/photos/t1.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-photo" href="images/photos/l3.jpg" data-rel="photos3">
                                    <img src="images/photos/s3.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-iframe" href="http://player.vimeo.com/video/70301553">
                                    <img src="images/photos/t5.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-photo" href="images/photos/l6.jpg" data-rel="photos3">
                                    <img src="images/photos/s6.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-link" href="http://www.themeforest.com" target="_blank">
                                    <img src="images/photos/t3.jpg" alt="" />
                                </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clear"></div>
            <!-- FOOTER -->
            <footer id="footer">
                <div id="footer-widgets">
                    <!-- WIDGET 1 -->
                    <div class="footer-widget first-clmn">
                        <h5>Recent Posts</h5>
                        <ul>
                            <li>
                                <a href="blog.html">Suspendisse ipsum urna</a>
                            </li>
                            <li>
                                <a href="blog.html">Pellentesque eget por</a>
                            </li>
                            <li>
                                <a href="blog.html">Aliquam sit amet urne</a>
                            </li>
                            <li>
                                <a href="blog.html">Ornare dapibus ornare et</a>
                            </li>
                            <li>
                                <a href="blog.html">Donec et odio et amet</a>
                            </li>
                        </ul>
                    </div>
                    <!-- WIDGET 2 -->
                    <div class="footer-widget second-clmn">
                        <h5>Categories</h5>
                        <ul>
                            <li>
                                <a href="single-post.html">Lorem Ipsum Dolor eget por</a>
                            </li>
                            <li>
                                <a href="single-post.html">Nibh Mauris lucem id sagit</a>
                            </li>
                            <li>
                                <a href="single-post.html">Donec in lorem mauris</a>
                            </li>
                            <li>
                                <a href="single-post.html">Auctor Mauris Dolor urna loe</a>
                            </li>
                            <li>
                                <a href="single-post.html">Mauris id posuere</a>
                            </li>
                        </ul>
                    </div>
                    <!-- WIDGET 3 -->
                    <div class="footer-widget third-clmn">
                        <h5>Flickr Feed</h5>
                        <!-- FLICKR WIDGET -->
                        <ul id="cbox" class="flickr-box"></ul>
                        <!-- END -->
                    </div>
                </div>
                <div class="clear"></div>
                <!-- COPYRIGHT -->
                <div class="credits">Copyright Egemenerd</div>
                <!-- SOCIAL ICONS -->
                <ul class="social-icons">
                    <li>
                        <a href="galleries.html#">
                            <img class="social-icon" src="images/social-icons/facebook.png" alt="Facebook" />
                        </a>
                    </li>
                    <li>
                        <a href="galleries.html#">
                            <img class="social-icon" src="images/social-icons/twitter.png" alt="Twitter" />
                        </a>
                    </li>
                    <li>
                        <a href="galleries.html#">
                            <img class="social-icon" src="images/social-icons/flickr.png" alt="Flickr" />
                        </a>
                    </li>
                    <li>
                        <a href="galleries.html#">
                            <img class="social-icon" src="images/social-icons/linkedin.png" alt="Linked in" />
                        </a>
                    </li>
                    <li>
                        <a href="galleries.html#">
                            <img class="social-icon" src="images/social-icons/google+.png" alt="Google+" />
                        </a>
                    </li>
                    <li>
                        <a href="galleries.html#">
                            <img class="social-icon" src="images/social-icons/vimeo.png" alt="Vimeo" />
                        </a>
                    </li>
                    <li>
                        <a href="galleries.html#">
                            <img class="social-icon" src="images/social-icons/youtube.png" alt="YouTube" />
                        </a>
                    </li>
                </ul>
            </footer>
            <!-- BACK TO TOP BUTTON -->
            <a href="galleries.html#" class="back-to-top"></a>
        </section>
        <!-- JS FILES -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/backstretch.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        <script type="text/javascript" src="js/easyResponsiveTabs.js"></script>
        <script type="text/javascript" src="js/gallery.js"></script>
        <!-- BG IMAGE -->
        <script type="text/javascript">
            jQuery(window).load(function() {
                "use strict";
                jQuery('body').backstretch("images/photos/bg-blurred.jpg");
            });
        </script>
        <!-- VERTICAL TABS -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#verticalTab').easyResponsiveTabs({
                    type: 'vertical',
                    width: 'auto',
                    fit: true
                });
            });
        </script>
        <!-- FILTERS 1 -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery("#filters1").dysaniagrid({
                    galleryid: "#gridbox1"
                });
            });
        </script>
        <!-- FILTERS 2 -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery("#filters2").dysaniagrid({
                    galleryid: "#gridbox2"
                });
            });
        </script>
        <script src="js/custom.js" type="text/javascript"></script>
    </body>

</html>