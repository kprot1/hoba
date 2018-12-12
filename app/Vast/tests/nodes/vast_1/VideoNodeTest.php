<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\AdIdNode;
use App\Vast\src\Nodes\Vast_1\AdParametersNode;
use App\Vast\src\Nodes\Vast_1\DurationNode;
use App\Vast\src\Nodes\Vast_1\MediaFilesNode;
use App\Vast\src\Nodes\Vast_1\VideoClicksNode;
use App\Vast\src\Nodes\Vast_1\VideoNode;

class VideoNodeTest extends AbstractTest
{
    protected function initNode()
    {
        return new VideoNode();
    }

    public function testExistMethods()
    {
        $this->assertTrue(method_exists($this->node, 'createDurationNode'));
        $this->assertTrue(method_exists($this->node, 'createAdIdNode'));
        $this->assertTrue(method_exists($this->node, 'createAdParametersNode'));
        $this->assertTrue(method_exists($this->node, 'createVideoClicksNode'));
        $this->assertTrue(method_exists($this->node, 'createMediaFilesNode'));
    }

    public function testMethods()
    {
        $this->assertInstanceOf(DurationNode::class, $this->node->createDurationNode());
        $this->assertInstanceOf(AdIdNode::class, $this->node->createAdIdNode());
        $this->assertInstanceOf(AdParametersNode::class, $this->node->createAdParametersNode());
        $this->assertInstanceOf(VideoClicksNode::class, $this->node->createVideoClicksNode());
        $this->assertInstanceOf(MediaFilesNode::class, $this->node->createMediaFilesNode());
    }
}
