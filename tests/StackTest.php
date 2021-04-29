<?php


namespace Phpunit\Utils\Tests;

use Exception;
use PHPUnit\Framework\TestCase;
use SplStack;

class StackTest extends TestCase
{
    public function testMainFlow(): void
    {
        $stack = new SplStack();

        $stack->push('one');
        $stack->push('two');
        $this->assertCount(2, $stack);

        $element1 = $stack->pop();
        $this->assertEquals('two', $element1);

        $element2 = $stack->pop();
        $this->assertEquals('one', $element2);

    }

    public function testIsEmpty(): void
    {
        $stack = new SplStack();

        $this->assertTrue($stack->isEmpty());
        $stack->push('one');
        $this->assertFalse($stack->isEmpty());
        $stack->pop();
        $this->assertTrue($stack->isEmpty());
    }

    public function testPop(): void
    {
        $this->expectException(Exception::class);

        $stack = new SplStack();
        $stack->pop();
    }
}