<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

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
}
