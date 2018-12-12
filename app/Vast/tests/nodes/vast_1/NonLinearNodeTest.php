<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\NonLinearNode;
use App\Vast\src\Nodes\Vast_1\UrlNode;

class NonLinearNodeTest extends AbstractTest
{
    protected function initNode()
    {
        return new NonLinearNode();
    }

    public function testExistMethods()
    {
        $this->assertTrue(method_exists($this->node, 'setId'));
        $this->assertTrue(method_exists($this->node, 'setWidth'));
        $this->assertTrue(method_exists($this->node, 'setHeight'));
        $this->assertTrue(method_exists($this->node, 'setResourceType'));
        $this->assertTrue(method_exists($this->node, 'setCreativeType'));
        $this->assertTrue(method_exists($this->node, 'setApiFramework'));
        $this->assertTrue(method_exists($this->node, 'createUrlNode'));
    }

    public function testMethods()
    {
        $this->assertInstanceOf(UrlNode::class, $this->node->createUrlNode());
    }
}
