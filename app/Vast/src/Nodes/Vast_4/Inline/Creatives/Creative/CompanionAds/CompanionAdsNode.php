<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\CompanionAds;

use App\Vast\src\Nodes\AbstractNode;

class CompanionAdsNode extends AbstractNode
{
    public function addCompanionNode(CompanionNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}