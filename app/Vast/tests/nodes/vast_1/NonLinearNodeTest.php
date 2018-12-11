<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\UrlNode;

class NonLinearNodeTest extends AbstractTest
{
    public function testCreateUrlNode()
    {
        $nonLinearNode = $this->createInlineNode()->createNonLinearAdsNode()->createNonLinearNode();
        $this->assertInstanceOf(UrlNode::class, $nonLinearNode->createUrlNode());
    }
}
