<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\Creatives;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\CreativeNode;

class CreativesNode extends AbstractNode
{
    public function addCreativeNode(CreativeNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}