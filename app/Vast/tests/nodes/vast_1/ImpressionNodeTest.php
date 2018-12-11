<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\UrlNode;

class ImpressionNodeTest extends AbstractTest
{
    public function testCreateUrlNode()
    {
        $inlineNode = $this->createInlineNode();
        $impressionNode = $inlineNode->createImpressionNode();
        $this->assertInstanceOf(UrlNode::class, $impressionNode->createUrlNode());
    }
}
