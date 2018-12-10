<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_2\Inline\DurationNode;
use App\Vast\src\Nodes\Vast_2\Inline\TrackingEventsNode;
use App\Vast\src\Nodes\Vast_2\Inline\VideoClicksNode;

class LinearNode extends AbstractNode
{
    public function setSkipOffset(string $value): self
    {
        $this->setAttribute('skipoffset', $value);
        return $this;
    }

    public function addAdParametersNode(AdParametersNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addDurationNode(DurationNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addMediaFilesNode(MediaFilesNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addTrackingEventsNode(TrackingEventsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addVideoClicksNode(VideoClicksNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}