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

    public function createInlineNode(): InlineNode
    {
        return $this->addElement(new InlineNode());
    }

    public function createWrapperNode(): WrapperNode
    {
        return $this->addElement(new WrapperNode());
    }

    public function createErrorNode(): ErrorNode
    {
        return $this->addElement(new ErrorNode());
    }
}