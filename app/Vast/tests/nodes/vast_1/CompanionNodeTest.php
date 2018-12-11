<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\CodeNode;

class CompanionNodeTest extends AbstractTest
{
    public function testCreateCodeNode()
    {
        $companionNode = $this->createInlineNode()->createCompanionAdsNode()->createCompanionNode();
        $this->assertInstanceOf(CodeNode::class, $companionNode->createCodeNode());
    }
}
