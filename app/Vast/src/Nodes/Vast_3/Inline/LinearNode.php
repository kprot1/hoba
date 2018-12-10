<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\Vast_2\Inline\LinearNode as LinearNode_Vast2;

class LinearNode extends LinearNode_Vast2
{
    public function setSkipOffset(string $value): self
    {
        $this->setAttribute('skipoffset', $value);
        return $this;
    }
}