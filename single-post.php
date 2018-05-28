<?php

include('sql/conn.php');

$info = get_info();

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Single Post</title>
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
            <div class="page-title">Post Title</div>
            <!-- FEATURED IMAGE -->
            <div class="page-img">
                <img src="images/photos/featured.jpg" alt="" />
            </div>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer">
                <!-- LEFT CONTAINER -->
                <section class="leftcontainer">
                    <article>
                        <!-- POST DATE -->
                        <div class="blogpostdate">11th Mar 2014, Saturday</div> 
                    <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem si ita labore dolor si appellat, aut dolore doctrina. Commodo dolor esse in magna, a a multos senserit nam si aliqua iis multos, appellat elit senserit litteris ubi ne eram voluptate commodo si aliqua occaecat ad quem enim, eram domesticarum fabulas quorum doctrina ut commodo efflorescere aut possumus. Cillum praetermissum mentitum quem cupidatat. Veniam a arbitror iis malis ab quo duis cupidatat. Tempor quem occaecat. Nescius si malis, non occaecat ne mentitum.</p>
                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia ipsum quis diam aliquam vel mollis nisi tempus. Nam et ante urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</blockquote>
                    <p>Anim admodum o possumus. Ea eu nisi senserit, eiusmod elit sunt cupidatat fugiat. Ad an tamen eiusmod, incurreret eram proident. Et noster quem e tempor. Non culpa exquisitaque. Aut enim graviterque. Ne cupidatat illustriora.</p>
                    <h2>probant illustriora</h2>
                    <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem si ita labore dolor si appellat, aut dolore doctrina. Commodo dolor esse in magna, a a multos senserit nam si aliqua iis multos.</p>
                    <!-- FLEX IMAGE -->
                    <figure class="caption-image">
                        <div>
                            <img src="images/photos/image.jpg" alt="" />
                        </div>
                        <figcaption>Probant nisi dolore an cillum.</figcaption>
                    </figure>
                    <p>Si quem incididunt pariatur id fugiat appellat eu amet summis ad lorem litteris do quid elit de cernantur quem malis an nisi. Ullamco irure aliqua offendit quem te amet ea commodo se possumus malis mentitum cernantur, esse distinguantur incurreret quis excepteur.</p>
                    </article>
                    <hr/>
                    <!-- COMMENTS -->
                    <h4>Comments</h4>
                    <!-- COMMENT 1 -->
                    <div class="comments">
                        <p class="meta">
                            <a href="single-post.html#">User Name</a>- August 9, 2013</p>
                        <div class="comments_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sapien odio, sit amet scelerisque felis. Maecenas tincidunt ligula eu magna tincidunt eget imperdiet erat malesuada. Ut in diam et metus facilisis venenatis sit amet vel enim. Duis semper elementum felis.</p>
                            <a href="single-post.html#" class="reply">Reply</a>
                            <div class="clr"></div>
                            <div class="reply_icon"></div>
                        </div>
                    </div>
                    <!-- COMMENT REPLY -->
                    <div class="comments reply">
                        <p class="meta">
                            <a href="single-post.html#">User Name</a>- August 10, 2013</p>
                        <div class="comments_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sapien odio, sit amet felis scelerisque felis. Maecenas tincidunt ligula eu magna tincidunt eget imperdiet erat males. Ut in diam et metus facilisis venenatis sit amet vel enim. Duis semper elementum felis.</p>
                            <a href="single-post.html#" class="reply">Reply</a>
                            <div class="clr"></div>
                            <div class="reply_icon"></div>
                        </div>
                    </div>
                    <!-- COMMENT 2 -->
                    <div class="comments">
                        <p class="meta">
                            <a href="single-post.html#">User Name</a>- August 15, 2013</p>
                        <div class="comments_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sapien odio, sit amet scelerisque felis. Maecenas tincidunt ligula eu magna tincidunt eget imperdiet erat malesuada. Ut in diam et metus facilisis venenatis sit amet vel enim. Duis semper elementum felis.</p>
                            <a href="single-post.html#" class="reply">Reply</a>
                            <div class="clr"></div>
                            <div class="reply_icon"></div>
                        </div>
                    </div>
                    <hr/>
                    <!-- COMMENT FORM -->
                    <h4>Write a Comment</h4>
                    <form class="comment-form">
                        <label>Your Name</label>
                        <input id="senderName" type="text" />
                        <label>Your E-mail</label>
                        <input id="senderEmail" type="text" />
                        <label>Your Comment</label>
                        <textarea id="comment" rows="5" cols="60"></textarea>
                        <input type="submit" class="button" value="Send Comment" />
                    </form>
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