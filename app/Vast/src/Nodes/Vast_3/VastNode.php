<?php

namespace App\Vast\src\Nodes\Vast_3;

use App\Vast\src\Nodes\AbstractNode;

class VastNode extends AbstractNode
{
    public function setVersion(string $value): self
    {
        $this->setAttribute('version', $value);
        return $this;
    }

    public function addAdNode(AdNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}