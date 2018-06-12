<?php

include('sql/conn.php');

$info = get_info();

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
                <span><?php print(htmlspecialchars($info['title'])) ?></span>
            </div>
        </header>
        <div class="clear"></div>
        
        <!-- MAIN MENU -->
        <?php include('menu.php'); ?>
        
        <!-- MAIN CONTAINER -->
        <section class="maincontainer">
            <!-- PAGE TITLE -->
            <div class="page-title">Kontakt</div>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer using-grid">
                <!-- GRID -->
                <div class="grid">
                    <!-- LEFT SIDE -->
                    <div class="unit two-thirds">
                        <h2>Kodu Staadion</h2>
                        <!-- GOOGLE MAP -->
                        <div class="flex-video">
                            <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Pargi%20tee%207%2C%20Viimsi+(Viimsi%20Pargi%20palliplats)&amp;ie=UTF8&amp;t=h&amp;z=15&amp;iwloc=B&amp;output=embed"></iframe>
                        </div>
                    </div>
                    <!-- RIGHT SIDE -->
                    <div class="unit one-third">
                        <h3>Representer</h3>
                        <ul class="list">
                            <li>
                                <strong>Stenver Nahkur</strong>
                            </li>
                            <li>
                                <strong>Phone:</strong> +372 5143080
                            </li>
                            <li>
                                <strong>E-Mail:</strong> Stenvern@hotmail.com
                            </li>
                        </ul>
                        <hr/>
                        <h3>Representer 2</h3>
                        <ul class="list">
                            <li>
                                <strong>Sten-Kristjan Nurk</strong>
                            </li>
                            <li>
                                <strong>Phone:</strong> +372 53319006
                            </li>
                            <li>
                                <strong>E-Mail:</strong> stennurk1@gmail.com
                            </li>
                        </ul>
                        <hr/>
                        <h3>Kodu Staadion</h3>
                        <ul class="list">
                            <li>
                                <strong>Mõisapargi palliplats</strong>
                            </li>
                            <li>
                                <strong>Aadress:</strong> Pargi tee 7, Viimsi
                            </li>
                        </ul>
                        <hr/>
                    </div>
                </div>
            </section>
            <div class="clear"></div>
            
            <!-- FOOTER -->
            <?php include('footer.php'); ?>
            
            <!-- BACK TO TOP BUTTON -->
            <a href="contact.html#" class="back-to-top"></a>
        </section>
        <!-- JS FILES -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/backstretch.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
    </body>
</html>