<?php

$_HOST_             = "sql313.hostfree.pw";
$_DBUSER_           = "epree_22138974";
$_DBPASS_           = "pingpong";
$_DATABASE_         = "epree_22138974_fc";


$_DB_NEWS_           = "news";
$_DB_INFO_           = "info";
$_DB_UPLOADS_        = "uploads";
$_DB_GALLERY_        = "gallery";
$_DB_IMAGECATEGORY_  = "imageCategory";
$_DB_TEAMINFO_       = "teamInfo";

$mysqli = new mysqli($_HOST_, $_DBUSER_, $_DBPASS_, $_DATABASE_);
$mysqli->set_charset("utf8");

function get_news() {
    global $mysqli, $_DB_NEWS_;
    
    $news = array();
    
    // get all data from news table
    $res = $mysqli->query("select * from `".$_DB_NEWS_."`;");
    
    // parse all rows
    while ($r = $res->fetch_assoc()) {
        $new = array(
            "title" => $r['title'],
            "description" => $r['description'],
            "date" => $r['date'],
            "imagePath" => $r['imagePath']
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
        "about" => $r['about']
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
?>