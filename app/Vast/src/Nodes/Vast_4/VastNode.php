<?php

namespace App\Vast\src\Nodes\Vast_4;

use App\Vast\src\Nodes\AbstractNode;

class VastNode extends AbstractNode
{
    public function setVersion(string $value): self
    {
        $this->setAttribute('version', $value);
        return $this;
    }

    public function addAdNode(AdNode $adNode): self
    {
        $this->addElement($adNode);
        return $this;
    }
}