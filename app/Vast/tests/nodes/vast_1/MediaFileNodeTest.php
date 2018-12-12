<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\MediaFileNode;
use App\Vast\src\Nodes\Vast_1\UrlNode;

class MediaFileNodeTest extends AbstractTest
{
    protected function initNode()
    {
        return new MediaFileNode();
    }

    public function testExistMethods()
    {
        $this->assertTrue(method_exists($this->node, 'setWidth'));
        $this->assertTrue(method_exists($this->node, 'setHeight'));
        $this->assertTrue(method_exists($this->node, 'setType'));
        $this->assertTrue(method_exists($this->node, 'setDelivery'));
        $this->assertTrue(method_exists($this->node, 'setBitrate'));
        $this->assertTrue(method_exists($this->node, 'createUrlNode'));
    }

    public function testMethods()
    {
        $this->assertInstanceOf(UrlNode::class, $this->node->createUrlNode());
    }
}
