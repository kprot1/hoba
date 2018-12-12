<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\CodeNode;
use App\Vast\src\Nodes\Vast_1\CompanionNode;

class CompanionNodeTest extends AbstractTest
{
    protected function initNode()
    {
        return new CompanionNode();
    }

    public function testExistMethods()
    {
        $this->assertTrue(method_exists($this->node, 'setId'));
        $this->assertTrue(method_exists($this->node, 'setWidth'));
        $this->assertTrue(method_exists($this->node, 'setHeight'));
        $this->assertTrue(method_exists($this->node, 'setResourceType'));
        $this->assertTrue(method_exists($this->node, 'createCodeNode'));
    }

    public function testMethods()
    {
        $this->assertInstanceOf(CodeNode::class, $this->node->createCodeNode());
    }
}
