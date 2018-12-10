<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\Vast_1\TrackingEventsNode;
use App\Vast\src\Nodes\Vast_2\Inline\AdParametersNode;
use App\Vast\src\Nodes\Vast_2\Inline\AltTextNode;
use App\Vast\src\Nodes\Vast_2\Inline\CompanionClickThroughNode;
use App\Vast\src\Nodes\Vast_2\Inline\CompanionNode as CompanionNode_Vast2;
use App\Vast\src\Nodes\Vast_2\Inline\HtmlResourceNode;
use App\Vast\src\Nodes\Vast_2\Inline\IFrameResourceNode;
use App\Vast\src\Nodes\Vast_2\Inline\StaticResourceNode;

/**
 * @method setId(string $value) : CompanionNode_Vast2
 * @method setWidth(string $value) : CompanionNode_Vast2
 * @method setHeight(string $value) : CompanionNode_Vast2
 * @method setExpandedWidth(string $value) : CompanionNode_Vast2
 * @method setExpandedHeight(string $value) : CompanionNode_Vast2
 * @method setApiFramework(string $value) : CompanionNode_Vast2
 * @method addStaticResourceNode(StaticResourceNode $node) : CompanionNode_Vast2
 * @method addIFrameResourceNode(IFrameResourceNode $node) : CompanionNode_Vast2
 * @method addHtmlResourceNode(HtmlResourceNode $node) : CompanionNode_Vast2
 * @method addTrackingEventsNode(TrackingEventsNode $node) : CompanionNode_Vast2
 * @method addCompanionClickThroughNode(CompanionClickThroughNode $node) : CompanionNode_Vast2
 * @method addAltTextNode(AltTextNode $node) : CompanionNode_Vast2
 * @method addAdParametersNode(AdParametersNode $node) : CompanionNode_Vast2
 */
class CompanionNode extends CompanionNode_Vast2
{
    public function setAssetWidth(string $value): self
    {
        $this->setAttribute('assetWidth', $value);
        return $this;
    }

    public function setAssetHeight(string $value): self
    {
        $this->setAttribute('assetHeight', $value);
        return $this;
    }

    public function setAdSlotId(string $value): self
    {
        $this->setAttribute('AdSlotID', $value);
        return $this;
    }

    public function addCompanionClickTrackingNode(CompanionClickTrackingNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}