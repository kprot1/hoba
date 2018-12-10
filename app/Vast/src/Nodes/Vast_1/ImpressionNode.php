<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class ImpressionNode extends AbstractNode
{
    public function addUrlNode(UrlNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
