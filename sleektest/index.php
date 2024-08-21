<?php


// var_dump(__DIR__);
use SleekDB\Store;

include "/var/www/html/SleekDBsrc/Store.php";

// var_dump(__DIR__);exit;

$databaseDirectory = "/var/www/html/SleekDatabase";

// $databaseDirectory = "/var/www/html/SleekDatabase";


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


// $deviceStore = new Store('devices', $databaseDirectory);
// $deviceStore->deleteStore();


$deviceStore = new Store('devices', $databaseDirectory);
$deviceStore->insert([
  'model' => 'Q1',
  'name' => 'ELETTROLUX AT400',
  'ram' => '128 gb',
  ]
);

// $deviceStore->updateById(2, [ "name" => "ELETTROLUX AT400" ]);

$allDevices = $deviceStore->findAll();
$findDevices = $deviceStore->findBy(["model", "like", "EZ%"], ["model" => "asc"], 10, 0);

print_r($allDevices);
// print_r($allUsers);



// echo "<H1>Sleek Test</H1>";



