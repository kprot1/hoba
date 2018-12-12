<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\AdNode;
use App\Vast\src\Nodes\Vast_1\InLineNode;

class AdNodeTest extends AbstractTest
{
    protected function initNode()
    {
        return new AdNode();
    }

    public function testExistMethods()
    {
        $this->assertTrue(method_exists($this->node, 'setId'));
        $this->assertTrue(method_exists($this->node, 'createInLineNode'));
    }

    public function testMethods()
    {
        $this->assertInstanceOf(InLineNode::class, $this->node->createInLineNode());
    }
}
