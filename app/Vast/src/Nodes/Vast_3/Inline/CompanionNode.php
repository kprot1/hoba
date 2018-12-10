<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\Vast_2\Inline\CompanionNode as CompanionNode_Vast2;

class CompanionNode extends CompanionNode_Vast2
{
    public function setAssetWidth(string $value): self
    {
        $this->setAttribute('assetWidth', $value);
        return $this;
    }

    public function setAssetHeight(string $value): self
    {
        $this->setAttribute('assetHeight', $value);
        return $this;
    }

    public function setAdSlotId(string $value): self
    {
        $this->setAttribute('AdSlotID', $value);
        return $this;
    }

    public function addCompanionClickTrackingNode(CompanionClickTrackingNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}