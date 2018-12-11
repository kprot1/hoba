<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\Linear;

use App\Vast\src\Nodes\AbstractNode;

class TrackingNode extends AbstractNode
{
    public function setEvent(string $value): self
    {
        $this->setAttribute('event', $value);
        return $this;
    }
}