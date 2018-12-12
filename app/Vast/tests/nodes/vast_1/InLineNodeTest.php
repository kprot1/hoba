<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\AdSystemNode;
use App\Vast\src\Nodes\Vast_1\AdTitleNode;
use App\Vast\src\Nodes\Vast_1\CompanionAdsNode;
use App\Vast\src\Nodes\Vast_1\ImpressionNode;
use App\Vast\src\Nodes\Vast_1\InLineNode;
use App\Vast\src\Nodes\Vast_1\NonLinearAdsNode;
use App\Vast\src\Nodes\Vast_1\TrackingEventsNode;
use App\Vast\src\Nodes\Vast_1\VideoNode;

class InLineNodeTest extends AbstractTest
{
    protected function initNode()
    {
        return new InLineNode();
    }

    public function testExistMethods()
    {
        $this->assertTrue(method_exists($this->node, 'createAdSystemNode'));
        $this->assertTrue(method_exists($this->node, 'createAdTitleNode'));
        $this->assertTrue(method_exists($this->node, 'createImpressionNode'));
        $this->assertTrue(method_exists($this->node, 'createTrackingEventsNode'));
        $this->assertTrue(method_exists($this->node, 'createVideoNode'));
        $this->assertTrue(method_exists($this->node, 'createCompanionAdsNode'));
        $this->assertTrue(method_exists($this->node, 'createNonLinearAdsNode'));
    }

    public function testMethods()
    {
        $this->assertInstanceOf(AdSystemNode::class, $this->node->createAdSystemNode());
        $this->assertInstanceOf(AdTitleNode::class, $this->node->createAdTitleNode());
        $this->assertInstanceOf(ImpressionNode::class, $this->node->createImpressionNode());
        $this->assertInstanceOf(TrackingEventsNode::class, $this->node->createTrackingEventsNode());
        $this->assertInstanceOf(VideoNode::class, $this->node->createVideoNode());
        $this->assertInstanceOf(CompanionAdsNode::class, $this->node->createCompanionAdsNode());
        $this->assertInstanceOf(NonLinearAdsNode::class, $this->node->createNonLinearAdsNode());
    }
}
