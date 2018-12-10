<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class TrackingNode extends AbstractNode
{
    public function setEvent(string $value): self
    {
        $this->setAttribute('event', $value);
        return $this;
    }

    public function addUrlNode(UrlNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
