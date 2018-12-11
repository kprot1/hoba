<?php

namespace App\Vast\tests\nodes\vast_1;


use App\Vast\src\Nodes\Vast_1\UrlNode;

class MediaFileNodeTest extends AbstractTest
{
    public function testCreateUrlNode()
    {
        $mediaFileNode = $this->createInlineNode()->createVideoNode()->createMediaFilesNode()->createMediaFileNode();
        $this->assertInstanceOf(UrlNode::class, $mediaFileNode->createUrlNode());
    }
}
