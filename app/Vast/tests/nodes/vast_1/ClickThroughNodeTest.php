<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\UrlNode;

class ClickThroughNodeTest extends AbstractTest
{
    public function testCreateUrlNode()
    {
        $node = $this->createInlineNode()->createVideoNode()->createVideoClicksNode()->createClickThroughNode();
        $this->assertInstanceOf(UrlNode::class, $node->createUrlNode());
    }
}
