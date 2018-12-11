<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\Linear;

use App\Vast\src\Nodes\AbstractNode;

class VideoClicksNode extends AbstractNode
{
    public function addClickThroughNode(ClickThroughNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addClickTrackingNode(ClickTrackingNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}