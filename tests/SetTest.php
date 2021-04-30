<?php


namespace Phpunit\Utils\Tests;

use PHPUnit\Framework\TestCase;
use Phpunit\Utils\Utils;

class SetTest extends TestCase
{
    private $data;
    private $dataCopy;
    private $set;

    public function setUp(): void
    {
        $this->data = [
            'a' => [
                'b' => [
                    'c' => 'd'
                ]
            ]
        ];
        $this->dataCopy = $this->data;

        $this->set = new Utils();
    }

    public function testSolutionWithPlainSet(): void
    {
        $this->set->set($this->data, ['a'], 'value');
        $this->dataCopy['a'] = 'value';
        $this->assertEquals($this->dataCopy, $this->data);
    }

    public function testSolutionWithNestedSet(): void
    {
        $this->set->set($this->data, ['a', 'b', 'c'], 'value');
        $this->dataCopy['a']['b']['c'] = 'value';
        $this->assertEquals($this->dataCopy, $this->data);
    }

    public function testSolutionWithNewProperty(): void
    {
        $this->set->set($this->data, ['a', 'b', 'd'], 'value');
        $this->dataCopy['a']['b']['d'] = 'value';
        $this->assertEquals($this->dataCopy, $this->data);
    }
}