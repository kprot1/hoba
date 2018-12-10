<?php

namespace App\Vast\src\Nodes\Vast_2;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_2\Inline\InlineNode;
use App\Vast\src\Nodes\Vast_2\Wrapper\WrapperNode;

class AdNode extends AbstractNode
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }

    public function addInlineNode(InlineNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addWrapperNode(WrapperNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}