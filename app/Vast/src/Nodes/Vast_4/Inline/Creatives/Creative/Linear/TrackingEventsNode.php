<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\Linear;

use App\Vast\src\Nodes\AbstractNode;

class TrackingEventsNode extends AbstractNode
{
    public function addTrackingNode(TrackingNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}