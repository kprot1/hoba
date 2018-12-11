<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\Linear;

use App\Vast\src\Nodes\AbstractNode;

class MediaFilesNode extends AbstractNode
{
    public function addMediaFileNode(MediaFileNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addMezzanineNode(MezzanineNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addInteractiveCreativeFileNode(InteractiveCreativeFileNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}