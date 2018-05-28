<?php

include('sql/conn.php');

$news = get_news();
$info = get_info();

?>

<!DOCTYPE html>
<html lang="en">
    
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
            <div class="scores-title">Upcoming Matches & Latest Results</div>
            <!-- FIXTURE SLIDER (not implemented right now) -->
            <!-- section class="transparent-bg">
                <div id="fixture">
                    <div class="slide-content">
                        <div class="match-results">
                            <span>Voluptate Cillum FC</span>
                            <span class="score">? - ?</span>
                            <span>Deserunt Quorum FC</span>
                        </div>
                        <div class="match-place">
                            <span>11th Mar 2014 - 10:00 PM at Quamquam Stadium</span>
                            <span class="red">
                                <a href="fixtures.html">Buy Ticket</a>
                            </span>
                        </div>
                    </div>
                    <div class="slide-content">
                        <div class="match-results">
                            <span>Deserunt Quorum FC</span>
                            <span class="score">2 - 1</span>
                            <span>Voluptate Cillum FC</span>
                        </div>
                        <div class="match-place">
                            <span>07th Mar 2014 - 11:00 PM at Suspendisse Stadium</span>
                            <span class="red">
                                <a href="result.html">Report</a>
                            </span>
                        </div>
                    </div>
                    <div class="slide-content">
                        <div class="match-results">
                            <span>Voluptate Cillum FC</span>
                            <span class="score">1 - 3</span>
                            <span>Deserunt Quorum FC</span>
                        </div>
                        <div class="match-place">
                            <span>03th Mar 2014 - 09:00 PM at Quamquam Stadium</span>
                            <span class="red">
                                <a href="result.html">Report</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </section -->
            
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer">
                <!-- LEFT CONTAINER -->
                <section class="leftcontainer">
                    <h1>Latest News</h1>
                    <hr/>
                    <?php

                    foreach ($news as &$new) {
                        print('
                            <article class="post">
                                <figure>
                                    <a href="single-post.html">
                                        <img src="'.$new['imagePath'].'" alt="" />
                                    </a>
                                    <figcaption>
                                        <h2>'.$new['title'].'</h2>
                                        <div class="post-date">'.$new['date'].'</div>
                                    </figcaption>
                                </figure>
                                <p>'.$new['description'].'
                                    <a href="single-post.html">Read more...</a>
                                </p>
                            </article>
                        ');
                    }
                    ?>
                    <hr/>
                    <!-- VIEW ALL BUTTON -->
                    <div class="blogpager">
                        <div class="previous">
                            <a href="blog.html" class="button next-prev">View All</a>
                        </div>
                    </div>
                </section>
                
                <!-- RIGHT CONTAINER -->
                <section class="rightcontainer">
                    <!-- SIDEBAR BOX (search not implemented yet) -->
                    <!-- div class="sidebarbox">
                        <h3>Search</h3>
                        <form id="searchform" class="searchbox">
                            <input type="text" id="search" class="field searchtext" placeholder="Keyword..." />
                            <input type="submit" class="button" name="submit" value="Go" />
                        </form>
                    </div -->
                    
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <h3>About Our Team</h3>
                        <p><?php print($info['about']) ?>
                            <a href="club.html">Read More...</a>
                        </p>
                    </div>
                    
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <div class="sidebarbox-title">
                            <h3>Fixture</h3>
                        </div>
                        <!-- TABLE -->
                        <div class="fixture-row">
                            <a href="result.html">
                                <div class="fixture-row-left">Consectetur FC
                                    <div>?</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>?</div>Voluptate Cillum FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Fabulas FC
                                    <div>1</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>3</div>Voluptate Cillum FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Voluptate Cillum FC
                                    <div>4</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>1</div>Vidisse FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Elit FC
                                    <div>2</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>4</div>Voluptate Cillum FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Voluptate Cillum FC
                                    <div>1</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>1</div>Domesticarum FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Ullamco FC
                                    <div>6</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>1</div>Voluptate Cillum FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Incididunt FC
                                    <div>1</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>5</div>Voluptate Cillum FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Voluptate Cillum FC
                                    <div>2</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>1</div>Pariatur FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Voluptate Cillum FC
                                    <div>1</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>3</div>Mentitum FC</div>
                            </a>
                        </div>
                    </div>
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <div class="sidebarbox-title">
                            <h3>Gallery</h3>
                        </div>
                        <!-- GALLERY -->
                        <ul class="team-gallery">
                            <li>
                                <a class="clb-photo" href="images/photos/l1.jpg">
                                    <img src="images/photos/s1.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-iframe" href="http://www.youtube.com/embed/1iIZeIy7TqM">
                                    <img src="images/photos/t1.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-photo" href="images/photos/l2.jpg">
                                    <img src="images/photos/s2.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-iframe" href="http://www.dailymotion.com/embed/video/x143vp2">
                                    <img src="images/photos/t2.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-photo" href="images/photos/l3.jpg">
                                    <img src="images/photos/s3.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-link" href="http://www.themeforest.com">
                                    <img src="images/photos/t3.jpg" alt="" />
                                </a>
                            </li>
                        </ul>
                        <a href="galleries.html" class="button button-widget">View All</a>
                    </div>
                </section>
            </section>
            <div class="clear"></div>
            <!-- SPONSORS TITLE -->
            <div class="logos-title">Sponsors</div>
            <!-- SPONSORS SLIDER -->
            <section class="transparent-bg">
                <div id="logos">
                    <div class="slide">
                        <a href="index.html#">
                            <img src="images/photos/themeforest.png" alt="" />
                        </a>
                    </div>
                    <div class="slide">
                        <a href="index.html#">
                            <img src="images/photos/codecanyon.png" alt="" />
                        </a>
                    </div>
                    <div class="slide">
                        <a href="index.html#">
                            <img src="images/photos/photodune.png" alt="" />
                        </a>
                    </div>
                    <div class="slide">
                        <a href="index.html#">
                            <img src="images/photos/activeden.png" alt="" />
                        </a>
                    </div>
                    <div class="slide">
                        <a href="index.html#">
                            <img src="images/photos/audiojungle.png" alt="" />
                        </a>
                    </div>
                </div>
            </section>
            <!-- FOOTER -->
            <?php include('footer.php'); ?>
        </section>
        <!-- JS FILES -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/backstretch.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        <!-- BG IMAGE -->
        <script type="text/javascript">
            jQuery(window).load(function() {
                "use strict";
                jQuery('body').backstretch("images/photos/bg-blurred.jpg");
            });
        </script>
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