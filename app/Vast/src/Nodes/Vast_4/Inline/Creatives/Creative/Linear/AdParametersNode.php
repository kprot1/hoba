<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\Linear;

use App\Vast\src\Nodes\AbstractNode;

class AdParametersNode extends AbstractNode
{
    public function setXmlEncoded(string $value): self
    {
        $this->setAttribute('xmlEncoded', $value);
        return $this;
    }
}