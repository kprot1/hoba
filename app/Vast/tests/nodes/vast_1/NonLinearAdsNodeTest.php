<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\NonLinearAdsNode;
use App\Vast\src\Nodes\Vast_1\NonLinearNode;

class NonLinearAdsNodeTest extends AbstractTest
{
    protected function initNode()
    {
        return new NonLinearAdsNode();
    }

    public function testExistMethods()
    {
        $this->assertTrue(method_exists($this->node, 'createNonLinearNode'));
    }

    public function testMethods()
    {
        $this->assertInstanceOf(NonLinearNode::class, $this->node->createNonLinearNode());
    }
}
