<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\CompanionAdsNode;
use App\Vast\src\Nodes\Vast_1\CompanionNode;

class CompanionAdsNodeTest extends AbstractTest
{
    protected function initNode()
    {
        return new CompanionAdsNode();
    }

    public function testExistMethods()
    {
        $this->assertTrue(method_exists($this->node, 'createCompanionNode'));
    }

    public function testMethods()
    {
        $this->assertInstanceOf(CompanionNode::class, $this->node->createCompanionNode());
    }
}
