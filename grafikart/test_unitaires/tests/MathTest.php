<?php

namespace App\Tests;

use App\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testDouble()
    {
        $this->assertEquals(4, Math::double(2));
    }

    public function testDoubleIfZero()
    {
        $this->assertEquals(0, Math::double(0));

    }
}
