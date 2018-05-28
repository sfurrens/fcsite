<?php

include('sql/conn.php');

$info = get_info();
$categories = get_imageCategories();

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
                        <?php
                        
                        foreach ($categories as &$category) {
                            print('
                                <li>'.htmlspecialchars($category['name']).'</li>
                            ');
                        }
                        ?>
                    </ul>
                    <div class="resp-tabs-container">
                        <div>
                            <?php
                        
                            foreach ($categories as &$category) {
                                $images = get_imagesByCategory($category['id']);
                                
                                print('
                                    <ul id="'.$category['id'].'" class="team-gallery">
                                ');
                                
                                foreach ($images as &$image) {
                                    print('
                                       <li>
                                            <a class="clb-photo" href="'.$image.'" data-rel="photo">
                                                <img src="'.$image.'" alt="" />
                                            </a>
                                        </li>
                                    ');
                                }
                                
                                print('
                                    </ul>
                                ');
                            }
                            ?>
                        </div>
                        <div>
                            <!-- GALLERY 2 -->
                            <ul id="gridbox2" class="team-gallery">
                                <li>
                                    <a class="clb-photo" href="images/photos/l1.jpg" data-rel="photos2">
                                        <img src="images/photos/s1.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a class="clb-iframe" href="http://www.youtube.com/embed/1iIZeIy7TqM">
                                        <img src="images/photos/t1.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a class="clb-photo" href="images/photos/l2.jpg" data-rel="photos2">
                                        <img src="images/photos/s2.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a class="clb-iframe" href="http://www.dailymotion.com/embed/video/x143vp2">
                                        <img src="images/photos/t2.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a class="clb-photo" href="images/photos/l3.jpg" data-rel="photos2">
                                        <img src="images/photos/s3.jpg" alt="" />
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
            <?php include('footer.php'); ?>
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