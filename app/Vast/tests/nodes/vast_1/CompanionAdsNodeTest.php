<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\CompanionNode;

class CompanionAdsNodeTest extends AbstractTest
{
    public function testCreateCompanionNode()
    {
        $companionAdsNode = $this->createInlineNode()->createCompanionAdsNode();
        $this->assertInstanceOf(CompanionNode::class, $companionAdsNode->createCompanionNode());
    }
}
