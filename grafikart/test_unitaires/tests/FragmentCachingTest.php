<?php

use App\CacheAdapterInterface;
use App\FragmentCaching;
use PHPUnit\Framework\TestCase;

class FakeCacheAdapter implements CacheAdapterInterface
{
    public function get($key)
    {
        return false;
    }
}

class FragmentCachingTest extends TestCase
{
    /*
     * $cache = new FragmentCaching($cacheAdapter);
     * $cache->cache('test', function(){...});
     */

    public function testConstructorWithoutInterface()
    {
        $this->expectException(Exception::class);

        new FragmentCaching(new stdClass());
    }

    public function testConstructorWithInterface()
    {
        new FragmentCaching(new FakeCacheAdapter());
    }

    public function testWithoutCache()
    {
        $cacheAdapter = $this->getMockBuilder(FakeCacheAdapter::class)
            ->setMethods(['get'])
            ->getMock()
        ;

        $cacheAdapter->method('get')->willReturn('en cache');

        $cache = new FragmentCaching($cacheAdapter);
        $this->expectOutputString('en cache');
        $cache->cache('test', function() { echo "salut"; });
    }
}