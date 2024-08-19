<?php


// var_dump(__DIR__);
use SleekDB\Store;

include __DIR__ . "/../SleekDBsrc/Store.php";

$databaseDirectory = __DIR__ . "/../SleekDatabase";

$newsStore = new \SleekDB\Store("news", $databaseDirectory);
$userStore = new Store('users', $databaseDirectory);
$postStore = new Store('posts', $databaseDirectory);

$article = [
    "title" => "Google Pixel XL",
    "about" => "Google announced a new Pixel!",
    "author" => [
      "avatar" => "profile-12.jpg",
      "name" => "Foo Bar"
    ]
   ];
$results = $newsStore->insert($article);

$userStore->insert([
    'name' => 'Mike Doe',
    'email' => 'miked@example.com',
    'avatar' => [
      'sm' => "/img-sm.jpg",
      'lg' => "/img-lg.jpg"
    ]
  ]);






$allNews = $newsStore->findAll();


$userStore->insert([
    'name' => 'Mike Doe',
    'email' => 'miked@example.com',
    'avatar' => [
      'sm' => "/img-sm.jpg",
      'lg' => "/img-lg.jpg"
    ]
  ]);


$allUsers = $userStore->findAll();




print_r($allNews);
print_r($allUsers);


// echo "<H1>Sleek Test</H1>";



