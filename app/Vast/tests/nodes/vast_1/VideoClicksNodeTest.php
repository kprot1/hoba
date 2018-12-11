<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\ClickThroughNode;

class VideoClicksNodeTest extends AbstractTest
{
    public function testCreateClickThroughNode()
    {
        $videoClicksNode = $this->createInlineNode()->createVideoNode()->createVideoClicksNode();
        $this->assertInstanceOf(ClickThroughNode::class, $videoClicksNode->createClickThroughNode());
    }
}
