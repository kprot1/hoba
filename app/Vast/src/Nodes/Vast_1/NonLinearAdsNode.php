<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class NonLinearAdsNode extends AbstractNode
{
    public function addNonLinearNode(NonLinearNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
