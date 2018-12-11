<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\CompanionAds;

use App\Vast\src\Nodes\AbstractNode;

class IFrameResourceNode extends AbstractNode
{
    public function setCreativeType(string $value): self
    {
        $this->setAttribute('creativeType', $value);
        return $this;
    }
}