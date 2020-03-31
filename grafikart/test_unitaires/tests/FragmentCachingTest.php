<?php


use App\FragmentCaching;
use PHPUnit\Framework\TestCase;

class FragmentCachingTest extends TestCase
{
    /*
     * $cache = new FragmentCaching($cacheAdapter);
     */

    public function testConstructorInterface()
    {
        $this->expectException(Exception::class);

        new FragmentCaching(new stdClass());
    }
}