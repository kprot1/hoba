<?php

namespace App\Vast\src\Nodes\Vast_2\Inline;

use App\Vast\src\Nodes\AbstractNode;

class AdSystemNode extends AbstractNode
{
    public function setVersion(string $value): self
    {
        $this->setAttribute('version', $value);
        return $this;
    }
}