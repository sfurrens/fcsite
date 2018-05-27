<?php

include('sql/conn.php');

$info = get_info();
$teamInfo = get_teamInfo();

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Team - <?php print(htmlspecialchars($info['title'])) ?></title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="user-scalable=0,width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
        <meta name="description" content="">
        <meta name="keywords" content="">
        <!-- CSS FILES -->
        <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/grid.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/colors.css" rel="stylesheet" type="text/css">
        <link href="css/colorbox.css" rel="stylesheet" type="text/css">
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
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
                <span><?php print(htmlspecialchars($info['title'])) ?></span>
            </div>
        </header>
        <div class="clear"></div>
        
        <!-- MAIN MENU -->
        <?php include('menu.php'); ?>
        
        <!-- MAIN CONTAINER -->
        <section class="maincontainer">
            <!-- PAGE TITLE -->
            <div class="page-title"><?php print(htmlspecialchars($teamInfo['title'])); ?></div>
            <!-- FEATURED IMAGE -->
            <div class="page-img">
                <?php print('<img src="'.$teamInfo['coverPath'].'" alt="Cover Image" />'); ?>
                
            </div>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer using-grid">
                <div class="grid">
                    <!-- GOOLKEEPERS -->
                    <div class="unit one-quarter teamlist">
                        <h3>Goolkeepers</h3>
                        <ul>
                            <li>
                                <a href="team.html#shelby" class="popup-with-zoom-anim">Shelby Firmin</a>
                                <!-- POPUP BOX -->
                                <div id="shelby" class="teamlist-popup zoom-anim-dialog mfp-hide">
                                    <img src="images/photos/player.jpg" alt="" />
                                    <h3>1 - Shelby Firmin</h3>
                                    <p>Eram ex vidisse ita eiusmod quem legam expetendis nisi, ea elit ingeniis adipisicing, ita ingeniis reprehenderit, probant duis singulis, consequat id vidisse, ne elit domesticarum, quae sed pariatur. Duis de mentitum an amet, malis ita occaecat est magna. Senserit fugiat o incurreret fidelissimae, si quid reprehenderit.</p>
                                </div>
                            </li>
                            <li>Albert Panfilo</li>
                            <li>Sebastien Telesphore</li>
                        </ul>
                    </div>
                    <!-- DEFENDERS -->
                    <div class="unit one-quarter teamlist">
                        <h3>Defenders</h3>
                        <ul>
                            <li>
                                <a href="team.html#darell" class="popup-with-zoom-anim">Darell Teunis</a>
                                <!-- POPUP BOX -->
                                <div id="darell" class="teamlist-popup zoom-anim-dialog mfp-hide">
                                    <img src="images/photos/player2.jpg" alt="" />
                                    <h3>4 - Darell Teunis</h3>
                                    <p>Eram ex vidisse ita eiusmod quem legam expetendis nisi, ea elit ingeniis adipisicing, ita ingeniis reprehenderit, probant duis singulis, consequat id vidisse, ne elit domesticarum, quae sed pariatur. Duis de mentitum an amet, malis ita occaecat est magna. Senserit fugiat o incurreret fidelissimae, si quid reprehenderit.</p>
                                </div>
                            </li>
                            <li>Geoffrey Lonnie</li>
                            <li>Otieno Martie</li>
                            <li>Lincoln Garry</li>
                            <li>Kevin Jakob</li>
                            <li>Hein Bryce</li>
                        </ul>
                    </div>
                    <!-- MIDFIELDERS -->
                    <div class="unit one-quarter teamlist">
                        <h3>Midfielders</h3>
                        <ul>
                            <li>Kolman Alden</li>
                            <li>
                                <a href="team.html#stephan" class="popup-with-zoom-anim">Stephan Michael</a>
                                <!-- POPUP BOX -->
                                <div id="stephan" class="teamlist-popup zoom-anim-dialog mfp-hide">
                                    <img src="images/photos/player.jpg" alt="" />
                                    <h3>7 - Stephan Michael</h3>
                                    <p>Eram ex vidisse ita eiusmod quem legam expetendis nisi, ea elit ingeniis adipisicing, ita ingeniis reprehenderit, probant duis singulis, consequat id vidisse, ne elit domesticarum, quae sed pariatur. Duis de mentitum an amet, malis ita occaecat est magna. Senserit fugiat o incurreret fidelissimae, si quid reprehenderit.</p>
                                </div>
                            </li>
                            <li>Arthur Max</li>
                            <li>Tillo Denis</li>
                            <li>
                                <a href="team.html#plinio" class="popup-with-zoom-anim">Plinio Angelino</a>
                                <!-- POPUP BOX -->
                                <div id="plinio" class="teamlist-popup zoom-anim-dialog mfp-hide">
                                    <img src="images/photos/player2.jpg" alt="" />
                                    <h3>7 - Plinio Angelino</h3>
                                    <p>Eram ex vidisse ita eiusmod quem legam expetendis nisi, ea elit ingeniis adipisicing, ita ingeniis reprehenderit, probant duis singulis, consequat id vidisse, ne elit domesticarum, quae sed pariatur. Duis de mentitum an amet, malis ita occaecat est magna. Senserit fugiat o incurreret fidelissimae, si quid reprehenderit.</p>
                                </div>
                            </li>
                            <li>Armando Ed</li>
                            <li>Timotheus Pancrazio</li>
                            <li>Edgar Spike</li>
                        </ul>
                    </div>
                    <!-- STRIKERS -->
                    <div class="unit one-quarter teamlist">
                        <h3>Strikers</h3>
                        <ul>
                            <li>
                                <a href="team.html#anselmo" class="popup-with-zoom-anim">Anselmo Osvaldo</a>
                                <!-- POPUP BOX -->
                                <div id="anselmo" class="teamlist-popup zoom-anim-dialog mfp-hide">
                                    <img src="images/photos/player.jpg" alt="" />
                                    <h3>9 - Anselmo Osvaldo</h3>
                                    <p>Eram ex vidisse ita eiusmod quem legam expetendis nisi, ea elit ingeniis adipisicing, ita ingeniis reprehenderit, probant duis singulis, consequat id vidisse, ne elit domesticarum, quae sed pariatur. Duis de mentitum an amet, malis ita occaecat est magna. Senserit fugiat o incurreret fidelissimae, si quid reprehenderit.</p>
                                </div>
                            </li>
                            <li>Abe Gerolt</li>
                            <li>
                                <a href="team.html#darrel" class="popup-with-zoom-anim">Darrel Lelio</a>
                                <!-- POPUP BOX -->
                                <div id="darrel" class="teamlist-popup zoom-anim-dialog mfp-hide">
                                    <img src="images/photos/player2.jpg" alt="" />
                                    <h3>11 - Darrel Lelio</h3>
                                    <p>Eram ex vidisse ita eiusmod quem legam expetendis nisi, ea elit ingeniis adipisicing, ita ingeniis reprehenderit, probant duis singulis, consequat id vidisse, ne elit domesticarum, quae sed pariatur. Duis de mentitum an amet, malis ita occaecat est magna. Senserit fugiat o incurreret fidelissimae, si quid reprehenderit.</p>
                                </div>
                            </li>
                            <li>Buster Clarence</li>
                        </ul>
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
                        <a href="team.html#">
                            <img class="social-icon" src="images/social-icons/facebook.png" alt="Facebook" />
                        </a>
                    </li>
                    <li>
                        <a href="team.html#">
                            <img class="social-icon" src="images/social-icons/twitter.png" alt="Twitter" />
                        </a>
                    </li>
                    <li>
                        <a href="team.html#">
                            <img class="social-icon" src="images/social-icons/flickr.png" alt="Flickr" />
                        </a>
                    </li>
                    <li>
                        <a href="team.html#">
                            <img class="social-icon" src="images/social-icons/linkedin.png" alt="Linked in" />
                        </a>
                    </li>
                    <li>
                        <a href="team.html#">
                            <img class="social-icon" src="images/social-icons/google+.png" alt="Google+" />
                        </a>
                    </li>
                    <li>
                        <a href="team.html#">
                            <img class="social-icon" src="images/social-icons/vimeo.png" alt="Vimeo" />
                        </a>
                    </li>
                    <li>
                        <a href="team.html#">
                            <img class="social-icon" src="images/social-icons/youtube.png" alt="YouTube" />
                        </a>
                    </li>
                </ul>
            </footer>
            <!-- BACK TO TOP BUTTON -->
            <a href="team.html#" class="back-to-top"></a>
        </section>
        <!-- JS FILES -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/backstretch.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- BG IMAGE -->
        <script type="text/javascript">
            jQuery(window).load(function() {
                "use strict";
                jQuery('body').backstretch("images/photos/bg-blurred.jpg");
            });
        </script>
        <!-- POPUP BOXES -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });
            });
        </script>
        <script src="js/custom.js" type="text/javascript"></script>
    </body>

</html>