<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\AdNode;
use App\Vast\src\Nodes\Vast_1\VideoAdServingTemplateNode;

class VideoAdServingTemplateNodeTest extends AbstractTest
{
    protected function initNode()
    {
        return new VideoAdServingTemplateNode();
    }

    public function testExistMethods()
    {
        $this->assertTrue(method_exists($this->node, 'createAdNode'));
    }

    public function testMethods()
    {
        $this->assertInstanceOf(AdNode::class, $this->node->createAdNode());
    }
}
