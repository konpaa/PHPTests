<?php


namespace Phpunit\Utils\Tests;

use PHPUnit\Framework\TestCase;
use Phpunit\Utils\Utils;

class UtilsTest extends TestCase
{
    public function testReverse(): void
    {
        $reverse = new Utils();
        $this->assertEquals($reverse->reverseString(''), '');
        $this->assertEquals($reverse->reverseString('hello'), 'olleh');
    }

    public function testGt(): void
    {
        $gt = new Utils();
        $this->assertTrue($gt->gt(5, 3));
        $this->assertNotTrue($gt->gt(3, 3));
    }

}