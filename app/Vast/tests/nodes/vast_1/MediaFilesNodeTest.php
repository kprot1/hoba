<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Nodes\Vast_1\MediaFileNode;

class MediaFilesNodeTest extends AbstractTest
{
    public function testCreateMediaFileNode()
    {
        $mediaFilesNode = $this->createInlineNode()->createVideoNode()->createMediaFilesNode();
        $this->assertInstanceOf(MediaFileNode::class, $mediaFilesNode->createMediaFileNode());
    }
}
