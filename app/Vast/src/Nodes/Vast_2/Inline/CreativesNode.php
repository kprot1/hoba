<?php

namespace App\Vast\src\Nodes\Vast_2\Inline;

use App\Vast\src\Nodes\AbstractNode;

class CreativesNode extends AbstractNode
{
    public function createCreativeNode(): CreativeNode
    {
        return $this->addElement(new CreativeNode());
    }
}