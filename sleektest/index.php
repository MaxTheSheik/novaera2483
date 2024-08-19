<?php


// var_dump(__DIR__);


include __DIR__ . "/../SleekDBsrc/Store.php";

$databaseDirectory = __DIR__ . "/../SleekDatabase";

$newsStore = new \SleekDB\Store("news", $databaseDirectory);



echo "<H1>Sleek Test</H1>";



