<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\AbstractNode;

class ExtensionNode extends AbstractNode
{
    public function setType(string $value): self
    {
        $this->setAttribute('type', $value);
        return $this;
    }
}