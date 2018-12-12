<?php

namespace App\Vast\src\Nodes\Vast_2\Inline;

use App\Vast\src\Nodes\AbstractNode;

class ClickThroughNode extends AbstractNode
{
    public function setId(string $id): self
    {
        $this->setAttribute('id', $id);
        return $this;
    }
}