<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\AdVerifications;

use App\Vast\src\Nodes\AbstractNode;

class ViewableImpressionNode extends AbstractNode
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }
}