<?php

namespace App\Vast\src\Nodes\Vast_4\Inline;

use App\Vast\src\Nodes\AbstractNode;

class PricingNode extends AbstractNode
{
    public function setModel(string $value): self
    {
        $this->setAttribute('model', $value);
        return $this;
    }

    public function setCurrency(string $value): self
    {
        $this->setAttribute('currency', $value);
        return $this;
    }
}