<?php
require('vendor/autoload.php');
use App\Hello;
use App\DoctrineCacheAdapter;

$cache = new \Doctrine\Common\Cache\FilesystemCache(__DIR__ . '/cache');

// On "adapte" notre objet
$adapter = new DoctrineCacheAdapter($cache);

$hello = new Hello();
echo $hello->sayHello($adapter);
