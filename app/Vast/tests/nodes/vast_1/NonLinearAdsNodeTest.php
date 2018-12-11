<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\NonLinearNode;

class NonLinearAdsNodeTest extends AbstractTest
{
    public function testCreateNonLinearNode()
    {
        $nonLinearAdsNode = $this->createInlineNode()->createNonLinearAdsNode();
        $this->assertInstanceOf(NonLinearNode::class, $nonLinearAdsNode->createNonLinearNode());
    }
}
