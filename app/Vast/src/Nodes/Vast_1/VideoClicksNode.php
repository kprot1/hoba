<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class VideoClicksNode extends AbstractNode
{
    public function createClickThroughNode(): ClickThroughNode
    {
        return $this->addElement(new ClickThroughNode());
    }
}
