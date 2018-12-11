<?php

namespace App\Vast\src\Nodes\Vast_4;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_4\Error\ErrorNode;
use App\Vast\src\Nodes\Vast_4\Inline\InlineNode;
use App\Vast\src\Nodes\Vast_4\Wrapper\WrapperNode;

class AdNode extends AbstractNode
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }

    public function setSequence(string $value): self
    {
        $this->setAttribute('sequence', $value);
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

    public function addErrorNode(ErrorNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}