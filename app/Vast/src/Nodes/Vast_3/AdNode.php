<?php

namespace App\Vast\src\Nodes\Vast_3;

use App\Vast\src\Nodes\Vast_1\InLineNode;
use App\Vast\src\Nodes\Vast_2\AdNode as AdNode_Vast2;
use App\Vast\src\Nodes\Vast_2\Wrapper\WrapperNode;

/**
 * @method setId(string $value)
 * @method addInlineNode(InLineNode $node)
 *
 * @method addWrapperNode(WrapperNode $node) : \App\Vast\src\Nodes\Vast_2\AdNode
 */
class AdNode extends AdNode_Vast2
{
    public function setSequence(string $value): self
    {
        $this->setAttribute('sequence', $value);
        return $this;
    }
}