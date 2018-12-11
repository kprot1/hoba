<?php

namespace App\Vast\src\Nodes\Vast_4\Inline;

use App\Vast\src\Nodes\AbstractNode;

class CategoryNode extends AbstractNode
{
    public function setAuthority(string $value): self
    {
        $this->setAttribute('authority', $value);
        return $this;
    }
}