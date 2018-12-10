<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\Vast_2\Inline\TrackingNode as TrackingNode_Vast2;

/**
 * @method setEvent(string $value) : TrackingNode_Vast2
 */
class TrackingNode extends TrackingNode_Vast2
{
    public function addUrlNode(UrlNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
