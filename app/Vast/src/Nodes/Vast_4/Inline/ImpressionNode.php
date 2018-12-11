<?php

namespace App\Vast\src\Nodes\Vast_4\Inline;

use App\Vast\src\Nodes\AbstractNode;

class ImpressionNode extends AbstractNode
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }
}