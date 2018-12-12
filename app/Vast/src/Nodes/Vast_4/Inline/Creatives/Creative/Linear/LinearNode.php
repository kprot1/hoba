<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\Linear;

use App\Vast\src\Nodes\AbstractNode;

class LinearNode extends AbstractNode
{
    public function setSkipOffset(string $value): self
    {
        $this->setAttribute('skipoffset', $value);
        return $this;
    }

    public function createAdParametersNode(AdParametersNode $node): AdParametersNode
    {
        return $this->addElement(new AdParametersNode());
    }

    public function createDurationNode(DurationNode $node): DurationNode
    {
        return $this->addElement(new DurationNode());
    }

    public function createMediaFilesNode(MediaFilesNode $node): MediaFilesNode
    {
        return $this->addElement(new MediaFilesNode());
    }

    public function createTrackingEventsNode(TrackingEventsNode $node): TrackingEventsNode
    {
        return $this->addElement(new TrackingEventsNode());
    }

    public function createVideoClicksNode(VideoClicksNode $node): VideoClicksNode
    {
        return $this->addElement(new VideoClicksNode());
    }
}