<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.12.2018
 * Time: 1:19
 */

namespace App\Vast\src\Nodes\Vast_2;


use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_1\AdParametersNode;
use App\Vast\src\Nodes\Vast_1\DurationNode;
use App\Vast\src\Nodes\Vast_1\MediaFilesNode;
use App\Vast\src\Nodes\Vast_1\TrackingEventsNode;

class LinearNode extends AbstractNode
{
    public function addDurationNode(DurationNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addTrackingEventsNode(TrackingEventsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addAdParametersNode(AdParametersNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addVideoClicksNode(VideoClicksNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addMediaFilesNode(MediaFilesNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
