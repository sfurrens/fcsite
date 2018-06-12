<?php

include('sql/conn.php');

$news = get_news(0, 5);
$info = get_info();
$categories = get_imageCategories();

?>

<!DOCTYPE html>
<html lang="et">
    <head>
        <title><?php print($info['title']) ?></title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="user-scalable=0,width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
        <meta name="description" content="">
        <meta name="keywords" content="">
        <!-- CSS FILES -->
        <link href="<?php print($info['faviconPath']) ?>" rel="shortcut icon" type="image/x-icon" />
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/colors.css" rel="stylesheet" type="text/css">
        <link href="css/colorbox.css" rel="stylesheet" type="text/css">
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
        <link href="css/media.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/modernizr.js"></script>
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
                <span><?php print(htmlspecialchars($info['title'])) ?></span>
            </div>
        </header>
        <div class="clear"></div>
        
        <!-- MAIN MENU -->
        <?php include('menu.php'); ?>
        
        <!-- MAIN CONTAINER -->
        <section class="maincontainer">
            <!-- FLEXSLIDER -->
            <section class="flex-wrapper">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <?php
                        
                        foreach ($news as &$new) {
                            print('
                                <li>
                                    <div class="flex-title">
                                        <h3>'.$new['title'].'</h3>
                                        <p>'.$new['description'].'</p>
                                    </div>
                                    <img src="'.$new['imagePath'].'" alt="" />
                                </li>
                            ');
                        }
                        ?>
                    </ul>
                </div>
            </section>
            <div class="clear"></div>
            
            <!-- FIXTURE TITLE -->
            <div class="scores-title">Tulevased Matsid & Tulemused</div>
            
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer">
                <!-- LEFT CONTAINER -->
                <section class="leftcontainer">
                    <h1>Uudised</h1>
                    <hr/>
                    <?php

                    foreach ($news as &$new) {
                        print('
                            <article class="post">
                                <figure>
                                    <a href="#">
                                        <img src="'.$new['imagePath'].'" alt="" />
                                    </a>
                                    <figcaption>
                                        <h2>'.$new['title'].'</h2>
                                        <div class="post-date">'.$new['date'].'</div>
                                    </figcaption>
                                </figure>
                                <p>'.$new['description'].'</p>
                            </article>
                            <hr/>
                        ');
                    }
                    ?>
                    <!-- VIEW ALL BUTTON -->
                    <div class="blogpager">
                        <div class="previous">
                            <a href="blog.php" class="button next-prev">Vaata Kõiki</a>
                        </div>
                    </div>
                </section>
                
                <!-- RIGHT CONTAINER -->
                <section class="rightcontainer">
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <h3>Meie Tiimist</h3>
                        <p><?php print($info['about']) ?>
                            <a href="club.html">Read More...</a>
                        </p>
                    </div>
                    
                    <!-- SIDEBAR BOX -->
                    <?php include('fixture.php'); ?>
                    
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <div class="sidebarbox-title">
                            <h3>Galerii</h3>
                        </div>
                        <!-- GALLERY -->
                        <ul class="team-gallery">
                            <?php
                            
                            $category = $categories[count($categories) -1];
                            $images = get_imagesByCategory($category['id']);
                            
                            foreach ($images as &$image) {
                                print('
                                   <li>
                                        <a class="clb-photo" href="'.$image.'" data-rel="photo">
                                            <img src="'.$image.'" alt="" />
                                        </a>
                                    </li>
                                ');
                            }
                            
                            ?>
                        </ul>
                        <a href="galleries.php" class="button button-widget">Vaata Kõiki</a>
                    </div>
                </section>
            </section>
            <div class="clear"></div>
            <!-- SPONSORS TITLE -->
            <?php include('sponsors.php'); ?>
            
            <!-- FOOTER -->
            <?php include('footer.php'); ?>
        </section>
        <!-- JS FILES -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/backstretch.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        <!-- SPONSORS SLIDER -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#logos').bxSlider({
                    slideWidth: 235,
                    pager: false,
                    minSlides: 2,
                    maxSlides: 5,
                    infiniteLoop: false,
                    hideControlOnEnd: true,
                    slideMargin: 10
                });
            });
        </script>
        <!-- FIXTURE SLIDER -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                "use strict";
                jQuery('#fixture').bxSlider({
                    pager: false,
                    infiniteLoop: false,
                    hideControlOnEnd: true
                });
            });
        </script>
        <script src="js/custom.js" type="text/javascript"></script>
    </body>

</html>