<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\InLineNode;

class AdNodeTest extends AbstractTest
{
    public function testCreateInLineNode()
    {
       $vast = $this->createVastNode();
       $adNode = $vast->createAdNode();
       $this->assertInstanceOf(InLineNode::class, $adNode->createInLineNode());
    }
}
