<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 07.12.2018
 * Time: 22:27
 */

namespace App\Vast\src\Nodes\Vast_1;


use App\Vast\src\Nodes\AbstractNode;

class VideoNode extends AbstractNode
{
    public function addDurationNode(DurationNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addAdIdNode(AdIDNode $node): self
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
