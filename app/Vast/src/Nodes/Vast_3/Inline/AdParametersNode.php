<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\AbstractNode;

class AdParametersNode extends AbstractNode
{
    public function setXmlEncoded(string $value): self
    {
        $this->setAttribute('xmlEncoded', $value);
        return $this;
    }
}