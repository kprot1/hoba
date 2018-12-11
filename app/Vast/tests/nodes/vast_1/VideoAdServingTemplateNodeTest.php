<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\AdNode;

class VideoAdServingTemplateNodeTest extends AbstractTest
{
    public function testCreateAdNodeMethod()
    {
        $node = $this->createVastNode();
        $this->assertInstanceOf(AdNode::class, $node->createAdNode());
    }
}
