<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\AdSystemNode;
use App\Vast\src\Nodes\Vast_1\AdTitleNode;
use App\Vast\src\Nodes\Vast_1\CompanionAdsNode;
use App\Vast\src\Nodes\Vast_1\ImpressionNode;
use App\Vast\src\Nodes\Vast_1\NonLinearAdsNode;
use App\Vast\src\Nodes\Vast_1\TrackingEventsNode;
use App\Vast\src\Nodes\Vast_1\VideoNode;

class InLineNodeTest extends AbstractTest
{
    private $node;

    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->node = $this->createInlineNode();
    }

    public function testCreateTrackingEventsNode()
    {
        $this->assertInstanceOf(TrackingEventsNode::class, $this->node->createTrackingEventsNode());
    }

    public function testCreateAdTitleNode()
    {
        $this->assertInstanceOf(AdTitleNode::class, $this->node->createAdTitleNode());
    }

    public function testCreateImpressionNode()
    {
        $this->assertInstanceOf(ImpressionNode::class, $this->node->createImpressionNode());
    }

    public function testCreateAdSystemNode()
    {
        $this->assertInstanceOf(AdSystemNode::class, $this->node->createAdSystemNode());
    }

    public function testCreateVideoNode()
    {
        $this->assertInstanceOf(VideoNode::class, $this->node->createVideoNode());
    }

    public function testCreateCompanionAdsNode()
    {
        $this->assertInstanceOf(CompanionAdsNode::class, $this->node->createCompanionAdsNode());
    }

    public function testCreateNonLinearAdsNode()
    {
        $this->assertInstanceOf(NonLinearAdsNode::class, $this->node->createNonLinearAdsNode());
    }
}
