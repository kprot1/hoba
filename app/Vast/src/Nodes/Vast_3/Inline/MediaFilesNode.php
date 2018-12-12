<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\AbstractNode;

class MediaFilesNode extends AbstractNode
{
    public function createMediaFileNode(): MediaFileNode
    {
        return $this->addElement(new MediaFileNode());
    }
}