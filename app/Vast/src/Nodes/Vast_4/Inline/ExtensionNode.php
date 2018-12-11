<?php

namespace App\Vast\src\Nodes\Vast_4\Inline;

use App\Vast\src\Nodes\AbstractNode;

class ExtensionNode extends AbstractNode
{
    public function setEvent(string $value): self
    {
        $this->setAttribute('event', $value);
        return $this;
    }
}