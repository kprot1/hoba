<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class TrackingEventsNode extends AbstractNode
{
    public function createTrackingNode(): TrackingNode
    {
        return $this->addElement(new TrackingNode());
    }
}
