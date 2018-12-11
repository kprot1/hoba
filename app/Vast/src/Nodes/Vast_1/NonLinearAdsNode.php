<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class NonLinearAdsNode extends AbstractNode
{
    public function createNonLinearNode(): NonLinearNode
    {
        return $this->addElement(new NonLinearNode());
    }
}
