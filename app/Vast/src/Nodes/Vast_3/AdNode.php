<?php

namespace App\Vast\src\Nodes\Vast_3;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_3\Inline\InLineNode;
use App\Vast\src\Nodes\Vast_3\Wrapper\WrapperNode;

class AdNode extends AbstractNode
{
    public function setId(string $id): self
    {
        $this->setAttribute('id', $id);
        return $this;
    }

    public function setSequence(string $value): self
    {
        $this->setAttribute('sequence', $value);
        return $this;
    }

    public function createInLineNode(): InLineNode
    {
        return $this->addElement(new InLineNode());
    }

    public function createWrapperNode(): WrapperNode
    {
        return $this->addElement(new WrapperNode());
    }
}