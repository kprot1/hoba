<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class ClickThroughNode extends AbstractNode
{
    public function addUrlNode(UrlNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
