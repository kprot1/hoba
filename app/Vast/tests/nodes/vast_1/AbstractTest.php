<?php

namespace App\Vast\tests\nodes\vast_1;

use PHPUnit\Framework\TestCase;

abstract class AbstractTest extends TestCase
{
    protected $node;

    abstract protected function initNode();

    abstract public function testExistMethods();

    abstract public function testMethods();

    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->node = $this->initNode();
    }
}
