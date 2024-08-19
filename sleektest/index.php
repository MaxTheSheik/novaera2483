<?php


// var_dump(__DIR__);


include __DIR__ . "/../SleekDBsrc/Store.php";

$databaseDirectory = __DIR__ . "/../SleekDatabase";

$newsStore = new \SleekDB\Store("news", $databaseDirectory);

$article = [
    "title" => "Google Pixel XL",
    "about" => "Google announced a new Pixel!",
    "author" => [
      "avatar" => "profile-12.jpg",
      "name" => "Foo Bar"
    ]
   ];
$results = $newsStore->insert($article);

$allNews = $newsStore->findAll();

print_r($allNews);


// echo "<H1>Sleek Test</H1>";



