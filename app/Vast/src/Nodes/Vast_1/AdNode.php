<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class AdNode extends AbstractNode
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }

    public function addInlineNode(InLineNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
