<?php

include('sql/conn.php');

$news = get_news();
$info = get_info();

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Blog - <?php print(htmlspecialchars($info['title'])) ?></title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="user-scalable=0,width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
        <meta name="description" content="">
        <meta name="keywords" content="">
        <!-- CSS FILES -->
        <link href="<?php print($info['faviconPath']) ?>" rel="shortcut icon" type="image/x-icon" />
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/colors.css" rel="stylesheet" type="text/css">
        <link href="css/colorbox.css" rel="stylesheet" type="text/css">
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
            <!-- PAGE TITLE -->
            <div class="page-title">Blog</div>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer">
                <!-- LEFT CONTAINER -->
                <section class="leftcontainer">
                    <!-- POST -->
                    <article class="post">
                        <figure>
                            <a href="single-post.html">
                                <img src="images/photos/blog1.jpg" alt="" />
                            </a>
                            <figcaption>
                                <h2>Post Title</h2>
                                <div class="post-date">June,12 2014</div>
                            </figcaption>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia ipsum quis diam aliquam vel mollis nisi tempus. Nam et ante urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam luctus, mi vel tincidunt pulvinar, lectus urna vestibulum velit, et pharetra enim sapien eget orci. Mauris in porta neque. In hac habitasse platea dictumst.
                            <a href="single-post.html">Read more...</a>
                        </p>
                    </article>
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <figure>
                            <a href="single-post.html">
                                <img src="images/photos/blog2.jpg" alt="" />
                            </a>
                            <figcaption>
                                <h2>Post Title</h2>
                                <div class="post-date">June,08 2014</div>
                            </figcaption>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia ipsum quis diam aliquam vel mollis nisi tempus. Nam et ante urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam luctus, mi vel tincidunt pulvinar, lectus urna vestibulum velit, et pharetra enim sapien eget orci. Mauris in porta neque. In hac habitasse platea dictumst.
                            <a href="single-post.html">Read more...</a>
                        </p>
                    </article>
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <figure>
                            <a href="single-post.html">
                                <img src="images/photos/blog3.jpg" alt="" />
                            </a>
                            <figcaption>
                                <h2>Post Title</h2>
                                <div class="post-date">June,05 2014</div>
                            </figcaption>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia ipsum quis diam aliquam vel mollis nisi tempus. Nam et ante urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam luctus, mi vel tincidunt pulvinar, lectus urna vestibulum velit, et pharetra enim sapien eget orci. Mauris in porta neque. In hac habitasse platea dictumst.
                            <a href="single-post.html">Read more...</a>
                        </p>
                    </article>
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <figure>
                            <a href="single-post.html">
                                <img src="images/photos/blog4.jpg" alt="" />
                            </a>
                            <figcaption>
                                <h2>Post Title</h2>
                                <div class="post-date">June,01 2014</div>
                            </figcaption>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia ipsum quis diam aliquam vel mollis nisi tempus. Nam et ante urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam luctus, mi vel tincidunt pulvinar, lectus urna vestibulum velit, et pharetra enim sapien eget orci. Mauris in porta neque. In hac habitasse platea dictumst.
                            <a href="single-post.html">Read more...</a>
                        </p>
                    </article>
                    <hr/>
                    <!-- PAGER -->
                    <div class="blogpager">
                        <div class="previous">
                            <a href="blog.html#" class="button next-prev">&#8249; Older Posts</a>
                        </div>
                        <div class="next">
                            <a href="blog.html#" class="button next-prev">Newer Posts &#8250;</a>
                        </div>
                    </div>
                </section>
                <!-- RIGHT CONTAINER -->
                <section class="rightcontainer">
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <h3>Search</h3>
                        <form id="searchform" class="searchbox">
                            <input type="text" id="search" class="field searchtext" placeholder="Keyword..." />
                            <input type="submit" class="button" name="submit" value="Go" />
                        </form>
                    </div>
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <h3>Recent Posts</h3>
                        <ul class="sidebarlist">
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
            <!-- FOOTER -->
            <?php include('footer.php'); ?>
            <!-- BACK TO TOP BUTTON -->
            <a href="blog.html#" class="back-to-top"></a>
        </section>
        <!-- JS FILES -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/backstretch.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        <!-- BG IMAGE -->
        <script type="text/javascript">
            jQuery(window).load(function() {
                "use strict";
                jQuery('body').backstretch("images/photos/bg-blurred.jpg");
            });
        </script>
        <script src="js/custom.js" type="text/javascript"></script>
    </body>

</html>