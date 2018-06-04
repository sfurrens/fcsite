<?php

$_HOST_              = "sql313.hostfree.pw";
$_DBUSER_            = "epree_22138974";
$_DBPASS_            = "pingpong";
$_DATABASE_          = "epree_22138974_fc";


$_DB_NEWS_           = "news";
$_DB_INFO_           = "info";
$_DB_UPLOADS_        = "uploads";
$_DB_GALLERY_        = "gallery";
$_DB_IMAGECATEGORY_  = "imageCategory";
$_DB_TEAMINFO_       = "teamInfo";
$_DB_PLAYERS_        = "players";
$_DB_PLAYERCATEGORY_ = "playerCategory";
$_DB_SPONSORS_       = "sponsors";
$_DB_FIXTURE_        = "fixture";

$mysqli = new mysqli($_HOST_, $_DBUSER_, $_DBPASS_, $_DATABASE_);
$mysqli->set_charset("utf8");


function searchById($id, $array) {
   foreach ($array as &$arr) {
       if ($arr['id'] == $id) {
           return $arr;
       }
   }
   return null;
}

function get_news($offset, $limit) {
    global $mysqli, $_DB_NEWS_, $_DB_UPLOADS_;
    
    $news = array();
    $uploadedImages = array();
    
    // get all data from news table
    $res = $mysqli->query("select * from `".$_DB_NEWS_."` limit ".$limit." offset ".$offset.";");
    
    $res2 = $mysqli->query("select `up`.`name`, `up`.`ext` from `".$_DB_UPLOADS_."` up, (select `uploadId_image` from `".$_DB_NEWS_."` limit ".$limit." offset ".$offset.") ne where `up`.`id` = `ne`.`uploadId_image`;");
    
    // parse uploaded images
    while ($r2 = $res2->fetch_assoc()) {
        $upload = array(
            "id" => $r2['id'],
            "imagePath" => 'uploads/' . $r2['name'] . '.' . $r2['ext']
        );
        array_push($uploadedImages, $upload);
    }
    
    // parse all rows
    while ($r = $res->fetch_assoc()) {
        $new = array(
            "title" => $r['title'],
            "description" => $r['description'],
            "date" => $r['date'],
            "imagePath" => searchById($r['uploadId_logo'], $uploadedImages)['imagePath']
        );
        array_push($news, $new);
    }
    
    return $news;
}

function get_info() {
    global $mysqli, $_DB_INFO_;
    
    $info = array();
    
    // get all data from news table
    $res = $mysqli->query("select * from `".$_DB_INFO_."`;");
    
    // parse all rows
    $r = $res->fetch_assoc();
    $info = array(
        "title" => $r['title'],
        "iconPath" => $r['iconPath'],
        "faviconPath" => $r['faviconPath'],
        "about" => $r['about'],
        "copyright" => $r['copyright'],
        "enable_sponsors" => $r['enable_sponsors']
    );
    
    return $info;
}

function get_imageCategories() {
    global $mysqli, $_DB_IMAGECATEGORY_;
    
    $categories = array();
    
    // get all data from news table
    $res = $mysqli->query("select * from `".$_DB_IMAGECATEGORY_."`;");
    
    // parse all rows
    while ($r = $res->fetch_assoc()) {
        $category = array(
            "id" => $r['id'],
            "name" => $r['name']
        );
        array_push($categories, $category);
    }
    
    return $categories;
}

function get_imagesByCategory($categoryId) {
    global $mysqli, $_DB_UPLOADS_, $_DB_GALLERY_;
    
    $images = array();
    
    // get all data from news table
    $res = $mysqli->query("select `name`, `ext` from `".$_DB_UPLOADS_."` where `id` in (select `uploadId` from `".$_DB_GALLERY_."` where `imageCategoryId` = ".$categoryId.");");
        
    // parse all rows
    while ($r = $res->fetch_assoc()) {
        array_push($images, 'uploads/' . $r['name'] . '.' . $r['ext']);
    }
    
    return $images;
}

function get_teamInfo() {
    global $mysqli, $_DB_TEAMINFO_, $_DB_UPLOADS_;
    
    $info = array();
    
    // get all data from news table
    $res = $mysqli->query("select `title` from `".$_DB_TEAMINFO_."` where `id` = 1;");
    $res2 = $mysqli->query("select `name`, `ext` from `".$_DB_UPLOADS_."` where `id` in (select `uploadId_cover` from `".$_DB_TEAMINFO_."` where `id` = 1);");
    
    // parse all rows
    $r = $res->fetch_assoc();
    $r2 = $res2->fetch_assoc();
    
    $info = array(
        "title" => $r['title'],
        "coverPath" => 'uploads/' . $r2['name'] . '.' . $r2['ext']
    );
    
    return $info;
}

function get_playerCategories() {
    global $mysqli, $_DB_PLAYERCATEGORY_;
    
    $categories = array();
    
    // get all data from news table
    $res = $mysqli->query("select * from `".$_DB_PLAYERCATEGORY_."`;");
    
    // parse rows
    while ($r = $res->fetch_assoc()) {
        $category = array(
            "id" => $r['id'],
            "name" => $r['name']
        );
        array_push($categories, $category);
    }
    
    return $categories;
}

function get_playersByCategory($category) {
    global $mysqli, $_DB_PLAYERS_;
    
    $players = array();
    
    // get all data from news table
    $res = $mysqli->query("select * from `".$_DB_PLAYERS_."` where `categoryId` = ".$category.";");
    
    // parse rows
    while ($r = $res->fetch_assoc()) {
        $player = array(
            "name" => $r['name']
        );
        array_push($players, $player);
    }
    
    return $players;
}

function get_sponsors() {
    global $mysqli, $_DB_SPONSORS_, $_DB_UPLOADS_;
    
    $sponsors = array();
    $uploadedImages = array();
    
    // get all data from news table
    $res = $mysqli->query("select * from `".$_DB_SPONSORS_."`;");
    
    $res2 = $mysqli->query("select * from `".$_DB_UPLOADS_."` where `id` in (select `uploadId_logo` from `".$_DB_SPONSORS_."`);");
    
    
    // parse uploaded images
    while ($r2 = $res2->fetch_assoc()) {
        $upload = array(
            "id" => $r2['id'],
            "imagePath" => 'uploads/' . $r2['name'] . '.' . $r2['ext']
        );
        array_push($uploadedImages, $upload);
    }
    
    // parse rows
    while ($r = $res->fetch_assoc()) {
        $sponsor = array(
            "name" => $r['name'],
            "link" => $r['link'],
            "imagePath" => searchById($r['uploadId_logo'], $uploadedImages)['imagePath']
        );
        array_push($sponsors, $sponsor);
    }
    
    return $sponsors;
}


function get_fixtures($offset, $limit) {
    global $mysqli, $_DB_FIXTURE_;
    
    $fixtures = array();
    
    // get all data from news table
    $res = $mysqli->query("select * from `".$_DB_FIXTURE_."` limit ".$limit." offset ".$offset.";");
    
    // parse rows
    while ($r = $res->fetch_assoc()) {
        $fixture = array(
            "leftName" => $r['leftName'],
            "leftScore" => $r['leftScore'],
            "rightName" => $r['rightName'],
            "rightScore" => $r['rightScore']
        );
        array_push($fixtures, $fixture);
    }
    
    return $fixtures;
}
?>