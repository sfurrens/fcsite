<?php

$_HOST_             = "sql313.hostfree.pw";
$_DBUSER_           = "epree_22138974";
$_DBPASS_           = "pingpong";
$_DATABASE_         = "epree_22138974_fc";


$_DB_NEWS_           = "news";

$mysqli = new mysqli($_HOST_, $_DBUSER_, $_DBPASS_, $_DATABASE_);

function get_news() {
    global $mysqli, $_DB_NEWS_;
    
    $news = array();
    
    // get all data from news table
    $res = $mysqli->query("select * from `".$_DB_NEWS_."`;");
    //$res = $mysqli->query("show tables;");
    
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
?>