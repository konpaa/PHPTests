<?php


namespace Phpunit\Utils\Tests;

use PHPUnit\Framework\TestCase;
use Phpunit\Utils\Cart;

class CartTest extends TestCase
{
    public function testCart(): void
    {
        $cart = new Cart();

        $this->assertEquals(0, count($cart->getItems()));

        $cart->addItem(['name' => 'car', 'price' => 100], 3);
        $this->assertEquals(1, count($cart->getItems()));
        $this->assertEquals(300, $cart->getCost());
        $this->assertEquals(3, $cart->getCount());

        $cart->addItem(['name' => 'tv', 'price' => 10], 5);
        $this->assertEquals(2, count($cart->getItems()));
        $this->assertEquals(350, $cart->getCost());
        $this->assertEquals(8, $cart->getCount());
    }
}