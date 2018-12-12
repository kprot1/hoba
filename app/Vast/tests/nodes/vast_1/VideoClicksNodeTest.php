<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\ClickThroughNode;
use App\Vast\src\Nodes\Vast_1\VideoClicksNode;

class VideoClicksNodeTest extends AbstractTest
{
    protected function initNode()
    {
        return new VideoClicksNode();
    }

    public function testExistMethods()
    {
        $this->assertTrue(method_exists($this->node, 'createClickThroughNode'));
    }

    public function testMethods()
    {
        $this->assertInstanceOf(ClickThroughNode::class, $this->node->createClickThroughNode());
    }
}
