<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\CompanionAds;

use App\Vast\src\Nodes\AbstractNode;

class CompanionClickTrackingNode extends AbstractNode
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }
}