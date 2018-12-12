<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\Linear;

use App\Vast\src\Nodes\AbstractNode;

class TrackingEventsNode extends AbstractNode
{
    public function createTrackingNode(): TrackingNode
    {
        return $this->addElement(new TrackingNode());
    }
}