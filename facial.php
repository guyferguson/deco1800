<?php
echo getcwd();
//require_once "unirest-php\src\Unirest.php"; 
require 'vendor/autoload.php';
// These code snippets use an open-source library. http://unirest.io/php
$response = Unirest::post("https://lambda-face-recognition.p.mashape.com/album",
  array(
      "X-Mashape-Key" => "mx0svRx5TSmshQNDwK6EmrTtRK7Up1XmiiOjsnk54KMjPshdff",
    "Content-Type" => "application/x-www-form-urlencoded",
    "Accept" => "application/json"
  ),
  array(
    "album" => "treeFaces"
  )
);
?>
<h1><?$response?><!--
$response = Unirest::post("https://lambda-face-recognition.p.mashape.com/album_train",
  array(
    "X-Mashape-Key" => "mx0svRx5TSmshQNDwK6EmrTtRK7Up1XmiiOjsnk54KMjPshdff"
  ),
  array(
    "album" => "treeFaces",
    "albumkey" => "mx0svRx5TSmshQNDwK6EmrTtRK7Up1XmiiOjsnk54KMjPshdff",
    "entryid" => "Guy",
    "files" => Unirest::file("<file goes here>"),
    "urls" => "/Images/Guy.jpg"
  )
);

$response = Unirest::get("https://lambda-face-recognition.p.mashape.com/album_rebuild?album=treefaces&albumkey=b1ccb6caa8cefb7347d0cfb65146d5e3f84608f6ee55b1c90d37ed4ecca9b273",
  array(
    "X-Mashape-Key" => "dM7WpZJTUEmshLqtOqwlNvdZvCyEp1ZRGv9jsncz9Xzanba7oT"
  )
);

$response = Unirest::post("https://lambda-face-recognition.p.mashape.com/recognize",
  array(
    "X-Mashape-Key" => "mx0svRx5TSmshQNDwK6EmrTtRK7Up1XmiiOjsnk54KMjPshdff"
  ),
  array(
    "album" => "treeFaces",
    "albumkey" => "b1ccb6caa8cefb7347d0cfb65146d5e3f84608f6ee55b1c90d37ed4ecca9b273",
    "files" => Unirest::file("<file goes here>"),
    "urls" => "/Images/Guy.jpg"
  )
);
?> -->