<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\AbstractNode;

class CompanionAdsNode extends AbstractNode
{
    public function createCompanionNode(): CompanionNode
    {
        return $this->addElement(new CompanionNode());
    }
}