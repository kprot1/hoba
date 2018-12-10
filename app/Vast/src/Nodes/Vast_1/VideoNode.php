<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class VideoNode extends AbstractNode
{
    public function addDurationNode(DurationNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addAdIdNode(AdIdNode $node): self
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
