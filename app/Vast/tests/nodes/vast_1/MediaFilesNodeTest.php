<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\MediaFileNode;
use App\Vast\src\Nodes\Vast_1\MediaFilesNode;

class MediaFilesNodeTest extends AbstractTest
{
    protected function initNode()
    {
        return new MediaFilesNode();
    }

    public function testExistMethods()
    {
        $this->assertTrue(method_exists($this->node, 'createMediaFileNode'));
    }

    public function testMethods()
    {
        $this->assertInstanceOf(MediaFileNode::class, $this->node->createMediaFileNode());
    }
}
