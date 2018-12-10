<?php

namespace App\Vast\src\Nodes\Vast_2\Inline;

use App\Vast\src\Nodes\AbstractNode;

class CreativesNode extends AbstractNode
{
    public function addCreativeNode(CreativeNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}