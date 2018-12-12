<?php

namespace App\Vast\src\Nodes\Vast_2;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_2\Inline\InlineNode;
use App\Vast\src\Nodes\Vast_2\Wrapper\WrapperNode;

class AdNode extends AbstractNode
{
    public function setId(string $id): self
    {
        $this->setAttribute('id', $id);
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
