<?php

namespace App\Vast\src\Nodes\Vast_2\Inline;

use App\Vast\src\Nodes\AbstractNode;

class CompanionAdsNode extends AbstractNode
{
    public function addCompanionNode(CompanionNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}