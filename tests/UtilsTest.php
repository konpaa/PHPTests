<?php


namespace Phpunit\Utils\Tests;

use PHPUnit\Framework\TestCase;
use function Phpunit\Utils\reverseString;

class UtilsTest extends TestCase
{
    public function testReverse(): void
    {
        $this->assertEquals(reverseString(''), '');
        $this->assertEquals(reverseString('hello'), 'olleh');
    }
}