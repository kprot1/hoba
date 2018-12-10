<?php

namespace App\Vast\src\Nodes\Vast_3;

use App\Vast\src\Nodes\Vast_2\AdNode as AdNode_Vast2;

class AdNode extends AdNode_Vast2
{
    public function setSequence(string $value): self
    {
        $this->setAttribute('sequence', $value);
        return $this;
    }
}