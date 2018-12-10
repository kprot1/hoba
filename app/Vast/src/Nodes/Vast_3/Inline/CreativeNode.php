<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\Vast_1\CompanionAdsNode;
use App\Vast\src\Nodes\Vast_2\Inline\CreativeNode as CreativeNode_Vast2;
use App\Vast\src\Nodes\Vast_2\Inline\LinearNode;

/**
 * @method setId(string $value) : CreativeNode_Vast2
 * @method setAdId(string $value) : CreativeNode_Vast2
 * @method setSequence(string $value) : CreativeNode_Vast2
 * @method addLinearNode(LinearNode $node) : CreativeNode_Vast2
 * @method addCompanionAdsNode(CompanionAdsNode $node) : CreativeNode_Vast2
 */
class CreativeNode extends CreativeNode_Vast2
{
    public function setApiFramework(string $value): self
    {
        $this->setAttribute('apiFramework', $value);
        return $this;
    }
}