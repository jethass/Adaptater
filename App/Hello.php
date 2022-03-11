<?php
Namespace App;

class Hello
{

    public function sayHello(CacheInterface $cache)
    {
        if($cache->has('hello')) {
            return $cache->get('hello');
        } else {
            sleep(4); // On simule un script lent 
            $content = 'bonjour';
            $cache->set('hello', $content);
            return $content;
        }
    }

}
