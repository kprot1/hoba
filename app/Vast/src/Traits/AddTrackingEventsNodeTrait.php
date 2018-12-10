<?php

namespace App\Vast\src\Traits;

use App\Vast\src\Nodes\Vast_1\TrackingEventsNode;

trait AddTrackingEventsNodeTrait
{
    public function addTrackingEventsNode(TrackingEventsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}