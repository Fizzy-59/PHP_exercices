<?php


namespace App;


interface CacheAdapterInterface
{
    public function get($key);
}