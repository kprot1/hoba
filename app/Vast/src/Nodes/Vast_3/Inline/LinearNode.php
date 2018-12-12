<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\AbstractNode;

class LinearNode extends AbstractNode
{
    public function setSkipOffset(string $value): self
    {
        $this->setAttribute('skipoffset', $value);
        return $this;
    }

    public function createAdParametersNode(): AdParametersNode
    {
        return $this->addElement(new AdParametersNode());
    }

    public function createDurationNode(): DurationNode
    {
        return $this->addElement(new DurationNode());
    }

    public function createMediaFilesNode(): MediaFilesNode
    {
        return $this->addElement(new MediaFilesNode());
    }

    public function createTrackingEventsNode(): TrackingEventsNode
    {
        return $this->addElement(new TrackingEventsNode());
    }

    public function createVideoClicksNode(): VideoClicksNode
    {
        return $this->addElement(new VideoClicksNode());
    }
}