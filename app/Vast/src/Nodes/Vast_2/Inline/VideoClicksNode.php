<?php

namespace App\Vast\src\Nodes\Vast_2\Inline;

use App\Vast\src\Nodes\Vast_1\ClickThroughNode;
use App\Vast\src\Nodes\Vast_1\VideoClicksNode as VideoClicksNode_Vast1;

/**
 * @method addClickThroughNode(ClickThroughNode $node)
 */
class VideoClicksNode extends VideoClicksNode_Vast1
{
    public function addClickTrackingNode(ClickTrackingNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}