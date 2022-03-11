<?php
require('vendor/autoload.php');
use App\Hello;
use App\DoctrineCacheAdapter;
use App\Cache;

$cache = new \Doctrine\Common\Cache\FilesystemCache(__DIR__ . '/cache');
$CacheAdapter = new DoctrineCacheAdapter($cache);

$hello = new Hello();
//dans le cas normale on passe notre cache qui implemente CacheInterface
//echo $hello->sayHello($CacheAdapter);

//ici on veut utilser CacheDoctrine a travers ce Adapter qui immplement notre CacheInterface
echo $hello->sayHello($CacheAdapter);
