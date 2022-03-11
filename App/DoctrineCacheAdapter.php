<?php 
Namespace App;

class DoctrineCacheAdapter implements CacheInterface {

    private $cache; // Notre objet venant d'une librairie tiers

    // On injecte notre objet dans le constructeur
    public function __construct(Doctrine\Common\Cache\Cache $cache)
    {
        $this->cache = $cache; 
    }

    // On map toutes les méthodes de l'interface aux méthodes de l'objet
    public function get($key)
    {
        return $this->cache->fetch($key);
    }

    public function has($key)
    {
        return $this->cache->contains($key);
    }

    public function set($key, $value, $expiration = 3600)
    {
        return $this->cache->save($key, $value, $expiration); 
    }
}
