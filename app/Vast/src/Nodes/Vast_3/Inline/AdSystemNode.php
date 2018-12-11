<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\AbstractNode;

class AdSystemNode extends AbstractNode
{
    public function setVersion(string $event): self
    {
        $this->setAttribute('version', $event);
        return $this;
    }
}