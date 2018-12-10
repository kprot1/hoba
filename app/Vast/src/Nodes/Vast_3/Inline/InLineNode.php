<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\Vast_2\Inline\InLineNode as InLineNode_Vast2;

class InLineNode extends InLineNode_Vast2
{
    public function addAdvertiserNode(AdvertiserNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addPricingNode(PricingNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}