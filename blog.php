<?php

include('sql/conn.php');

$news = get_news(0, 8);
$info = get_info();

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Blogi - <?php print(htmlspecialchars($info['title'])) ?></title>
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
            <div class="page-title">Blogi</div>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer">
                <!-- LEFT CONTAINER -->
                <section class="leftcontainer">
                    <?php

                    foreach ($news as &$new) {
                        print('
                            <!-- POST -->
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
                                <p>'.$new['description'].'
                                    <!--a href="single-post.php">Read more...</a-->
                                </p>
                            </article>
                            <hr/>
                        ');
                    }
                    ?>
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
                    <!-- SIDEBAR BOX (not implemented) -->
                    <!-- div class="sidebarbox">
                        <h3>Search</h3>
                        <form id="searchform" class="searchbox">
                            <input type="text" id="search" class="field searchtext" placeholder="Keyword..." />
                            <input type="submit" class="button" name="submit" value="Go" />
                        </form>
                    </div -->
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <h3>Viimased Postitused</h3>
                        <ul class="sidebarlist">
                            <?php

                            foreach ($news as &$new) {
                                print('
                                    <li>
                                        <a href="single-post.html">'.$new['title'].'</a>
                                    </li>
                                ');
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- SIDEBAR BOX -->
                    <?php include('fixture.php'); ?>
                </section>
            </section>
            <!-- FOOTER -->
            <?php include('footer.php'); ?>
        </section>
        <!-- JS FILES -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/backstretch.js"></script>
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