<?php

include('sql/conn.php');

$info = get_info();

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Contact</title>
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
            <div class="page-title">Layout</div>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer using-grid">
                <!-- GRID -->
                <div class="grid">
                    <!-- LEFT SIDE -->
                    <div class="unit two-thirds">
                        <h2>Our Stadium</h2>
                        <p>Voluptate se quorum pariatur, qui esse quae hic excepteur hic dolor illustriora ingeniis dolor iudicem, officia varias malis iis minim. Qui duis fore minim nescius an quis familiaritatem possumus sint nescius a lorem singulis domesticarum, quibusdam an legam cernantur.</p>
                        <p>Proident quem non voluptate transferrem id se non fore iudicem, qui in duis sunt irure se ullamco quo multos. In ne varias magna velit quo aliqua deserunt domesticarum. Ita multos aliquip cohaerescant, velit ea quamquam ne irure aut an quis est ipsum, anim exquisitaque laboris cillum tempor. Irure appellat si aute nisi.</p>
                        <!-- GOOGLE MAP -->
                        <div class="flex-video">
                            <iframe src="https://maps.google.com/maps?f=q&source=s_q&hl=tr&geocode=&q=new+york&aq=&sll=37.0625,-95.677068&sspn=39.371738,86.572266&ie=UTF8&hq=&hnear=New+York&t=m&z=10&ll=40.714353,-74.005973&output=embed&iwloc=near"></iframe>
                        </div>
                        <p>Tamen deserunt exquisitaque. Senserit et ipsum senserit non id legam arbitror. Te minim noster de vidisse. Ipsum nam fabulas. Quibusdam an legam, summis pariatur nostrud eu et irure legam noster singulis, velit possumus exquisitaque.</p>
                    </div>
                    <!-- RIGHT SIDE -->
                    <div class="unit one-third">
                        <h3>Head Office</h3>
                        <ul class="list">
                            <li>
                                <strong>Address:</strong>Lorem ipsum street 10/2 New York</li>
                            <li>
                                <strong>Phone:</strong>+97 46 543232</li>
                            <li>
                                <strong>Fax:</strong>+97 46 543231</li>
                        </ul>
                        <hr/>
                        <h3>Sport Center</h3>
                        <ul class="list">
                            <li>
                                <strong>Address:</strong>Labore street 8/6 New York</li>
                            <li>
                                <strong>Phone:</strong>+97 46 543282</li>
                            <li>
                                <strong>Fax:</strong>+97 46 543281</li>
                        </ul>
                        <hr/>
                        <h3>Contact Form</h3>
                        <!-- CONTACT FORM -->
                        <form id="contactForm" action="processform.php" method="post">
                            <label>Your Name:</label>
                            <input type="text" name="senderName" id="senderName" required="required" maxlength="40" />
                            <label>Your Email:</label>
                            <input type="email" name="senderEmail" id="senderEmail" required="required" maxlength="50" />
                            <label>Your Message:</label>
                            <textarea name="message" id="message" required="required"></textarea>
                            <input type="submit" id="sendMessage" name="sendMessage" class="button" value="Send Message" />
                        </form>
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
                        <a href="contact.html#">
                            <img class="social-icon" src="images/social-icons/facebook.png" alt="Facebook" />
                        </a>
                    </li>
                    <li>
                        <a href="contact.html#">
                            <img class="social-icon" src="images/social-icons/twitter.png" alt="Twitter" />
                        </a>
                    </li>
                    <li>
                        <a href="contact.html#">
                            <img class="social-icon" src="images/social-icons/flickr.png" alt="Flickr" />
                        </a>
                    </li>
                    <li>
                        <a href="contact.html#">
                            <img class="social-icon" src="images/social-icons/linkedin.png" alt="Linked in" />
                        </a>
                    </li>
                    <li>
                        <a href="contact.html#">
                            <img class="social-icon" src="images/social-icons/google+.png" alt="Google+" />
                        </a>
                    </li>
                    <li>
                        <a href="contact.html#">
                            <img class="social-icon" src="images/social-icons/vimeo.png" alt="Vimeo" />
                        </a>
                    </li>
                    <li>
                        <a href="contact.html#">
                            <img class="social-icon" src="images/social-icons/youtube.png" alt="YouTube" />
                        </a>
                    </li>
                </ul>
            </footer>
            <!-- BACK TO TOP BUTTON -->
            <a href="contact.html#" class="back-to-top"></a>
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