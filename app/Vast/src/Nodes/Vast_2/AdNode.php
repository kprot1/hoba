<?php

namespace App\Vast\src\Nodes\Vast_2;

use App\Vast\src\Nodes\Vast_1\AdNode as AdNode_Vast1;
use App\Vast\src\Nodes\Vast_1\InLineNode;
use App\Vast\src\Nodes\Vast_2\Wrapper\WrapperNode;

/**
 * @method setId(string $value) : \App\Vast\src\Nodes\Vast_1\AdNode
 * @method addInlineNode(InLineNode $node) : \App\Vast\src\Nodes\Vast_1\AdNode
 */
class AdNode extends AdNode_Vast1
{
    public function addWrapperNode(WrapperNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}