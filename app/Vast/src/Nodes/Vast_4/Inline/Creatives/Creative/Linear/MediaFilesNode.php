<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\Linear;

use App\Vast\src\Nodes\AbstractNode;

class MediaFilesNode extends AbstractNode
{
    public function createMediaFileNode(): MediaFileNode
    {
        return $this->addElement(new MediaFileNode());
    }

    public function createMezzanineNode(): MezzanineNode
    {
        return $this->addElement(new MezzanineNode());
    }

    public function createInteractiveCreativeFileNode(): InteractiveCreativeFileNode
    {
        return $this->addElement(new InteractiveCreativeFileNode());
    }
}