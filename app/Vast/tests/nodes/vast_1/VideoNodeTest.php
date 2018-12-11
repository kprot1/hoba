<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\AdIdNode;
use App\Vast\src\Nodes\Vast_1\AdParametersNode;
use App\Vast\src\Nodes\Vast_1\DurationNode;
use App\Vast\src\Nodes\Vast_1\MediaFilesNode;
use App\Vast\src\Nodes\Vast_1\VideoClicksNode;

class VideoNodeTest extends AbstractTest
{
    private $videoNode;

    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->videoNode = $this->createInlineNode()->createVideoNode();
    }

    public function testCreateDurationNode()
    {
        $this->assertInstanceOf(DurationNode::class, $this->videoNode->createDurationNode());
    }

    public function testCreateAdParametersNode()
    {
        $this->assertInstanceOf(AdParametersNode::class, $this->videoNode->createAdParametersNode());
    }

    public function testCreateVideoClicksNode()
    {
        $this->assertInstanceOf(VideoClicksNode::class, $this->videoNode->createVideoClicksNode());
    }

    public function testCreateMediaFilesNode()
    {
        $this->assertInstanceOf(MediaFilesNode::class, $this->videoNode->createMediaFilesNode());
    }

    public function testCreateAdIdNode()
    {
        $this->assertInstanceOf(AdIdNode::class, $this->videoNode->createAdIdNode());
    }
}
