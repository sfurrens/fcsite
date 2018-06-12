<?php

include('sql/conn.php');

$info = get_info();

if (isset($_POST['submit'])) {
    $pass = $_POST['pass'];
    
    if ($pass == "pingpong") {
        $file_name = basename($_FILES['image']['name']);
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
        
        if (in_array($file_ext, array("jpeg", "jpg", "png")) === false) {
            print("<script>alert('only jpeg/jpg and png are supported: ".$file_ext."');</script>");
        } else {
            // upload image
            $mysqli->query("insert into `".$_DB_UPLOADS_."`(name, ext) values(UUID(), '".$file_ext."');");
            $last_id = $mysqli->insert_id;
            $res = $mysqli->query("select `name` from `".$_DB_UPLOADS_."` where `id` = ".$last_id.";");
            $r = $res->fetch_assoc();
            
            move_uploaded_file($file_tmp, "uploads/" . $r['name'] . "." . $file_ext);
            
            // adding new post
            $mysqli->query("insert into `".$_DB_NEWS_."`(title, description, date, uploadId_image) values('".$_POST['title']."', '".$_POST['description']."', '".$_POST['date']."', ".$last_id.");");
            
            
            print("<script>alert('success');</script>");
        }
    } else {
        print("<script>alert('wrong pass');</script>");
    }
}

?>

<!DOCTYPE html>
<html lang="et">
    <head>
        <title>Tiimist - <?php print(htmlspecialchars($info['title'])) ?></title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="user-scalable=0,width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
        <meta name="description" content="">
        <meta name="keywords" content="">
        <!-- CSS FILES -->
        <link href="<?php print($info['faviconPath']) ?>" rel="shortcut icon" type="image/x-icon" />
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
        <!-- HEADER -->
        <header id="header">
            <div class="logo">
                <img src="<?php print($info['iconPath']) ?>" alt="" />
                <span><?php print(htmlspecialchars($info['title'])) ?></span>
            </div>
        </header>
        <div class="clear"></div>
        
        <!-- MAIN CONTAINER -->
        <section class="maincontainer">
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer using-grid">
                <div class="grid">
                    <form enctype="multipart/form-data" action="?" method="post">
                        <input type="text" placeholder="Title" name="title" />
                        Description<br/>
                        <textarea name="description"></textarea>
                        <input type="date" name="date" />
                        cover photo<br/>
                        <input type="file" name="image" />
                        <input type="password" placeholder="password" name="pass">
                        <input type="submit" value="submit" name="submit" />
                    </form>
                </div>
            </section>
            <div class="clear"></div>
            <!-- FOOTER -->
            <?php include('footer.php'); ?>
        </section>
        <!-- JS FILES -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/backstretch.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
    </body>
</html>