<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\AbstractNode;

class VideoClicksNode extends AbstractNode
{
    public function createClickThroughNode(): ClickThroughNode
    {
        return $this->addElement(new ClickThroughNode());
    }

    public function createClickTrackingNode(): ClickTrackingNode
    {
        return $this->addElement(new ClickTrackingNode());
    }
}