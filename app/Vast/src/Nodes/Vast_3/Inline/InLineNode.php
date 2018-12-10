<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\Vast_1\AdTitleNode;
use App\Vast\src\Nodes\Vast_2\Inline\AdSystemNode;
use App\Vast\src\Nodes\Vast_2\Inline\CreativesNode;
use App\Vast\src\Nodes\Vast_2\Inline\DescriptionNode;
use App\Vast\src\Nodes\Vast_2\Inline\ErrorNode;
use App\Vast\src\Nodes\Vast_2\Inline\ExtensionsNode;
use App\Vast\src\Nodes\Vast_2\Inline\ImpressionNode;
use App\Vast\src\Nodes\Vast_2\Inline\InLineNode as InLineNode_Vast2;

/**
 * @method addAdSystemNode(AdSystemNode $node) : InLineNode_Vast2
 * @method addAdTitleNode(AdTitleNode $node) : InLineNode_Vast2
 * @method addDescriptionNode(DescriptionNode $node) : InLineNode_Vast2
 * @method addErrorNode(ErrorNode $node) : InLineNode_Vast2
 * @method addImpressionNode(ImpressionNode $node) : InLineNode_Vast2
 * @method addCreativesNode(CreativesNode $node) : InLineNode_Vast2
 * @method addExtensionsNode(ExtensionsNode $node) : InLineNode_Vast2
 */
class InLineNode extends InLineNode_Vast2
{
    public function addAdvertiserNode(AdvertiserNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addPricingNode(PricingNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}