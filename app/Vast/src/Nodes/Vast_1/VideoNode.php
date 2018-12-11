<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class VideoNode extends AbstractNode
{
    public function createDurationNode(): DurationNode
    {
        return $this->addElement(new DurationNode());
    }

    public function createAdIdNode(): AdIdNode
    {
        return $this->addElement(new AdIdNode());
    }

    public function createAdParametersNode(): AdParametersNode
    {
        return $this->addElement(new AdParametersNode());
    }

    public function createVideoClicksNode(): VideoClicksNode
    {
        return $this->addElement(new VideoClicksNode());
    }

    public function createMediaFilesNode(): MediaFilesNode
    {
        return $this->addElement(new MediaFilesNode());
    }
}
