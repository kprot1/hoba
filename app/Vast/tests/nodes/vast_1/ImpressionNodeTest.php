<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\ImpressionNode;
use App\Vast\src\Nodes\Vast_1\UrlNode;

class ImpressionNodeTest extends AbstractTest
{
    protected function initNode()
    {
        return new ImpressionNode();
    }

    public function testExistMethods()
    {
        $this->assertTrue(method_exists($this->node, 'createUrlNode'));
    }

    public function testMethods()
    {
        $this->assertInstanceOf(UrlNode::class, $this->node->createUrlNode());
    }
}
