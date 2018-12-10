<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\AbstractNode;

class CreativesNode extends AbstractNode
{
    public function addCreative(CreativeNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}