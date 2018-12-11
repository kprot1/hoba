<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative;

use App\Vast\src\Nodes\AbstractNode;

class UniversalAdIdNode extends AbstractNode
{
    public function setIdRegistry(string $value): self
    {
        $this->setAttribute('idRegistry', $value);
        return $this;
    }

    public function setIdValue(string $value): self
    {
        $this->setAttribute('idValue', $value);
        return $this;
    }
}