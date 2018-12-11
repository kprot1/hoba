<?php

namespace App\Vast\src\Nodes\Vast_4\Wrapper;

use App\Vast\src\Nodes\AbstractNode;

class CompanionAdsNode extends AbstractNode
{
    public function addCompanionNode(CompanionNode $node)
    {
        $this->addElement($node);
        return $this;
    }
}