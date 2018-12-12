<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\UrlNode;
use PHPUnit\Framework\TestCase;

class UrlNodeTest extends AbstractTest
{
    protected function initNode()
    {
        return new UrlNode();
    }

    public function testExistMethods()
    {
        $this->assertTrue(method_exists($this->node, 'setId'));
    }

    public function testMethods()
    {
        $this->assertTrue(true);
    }
}
