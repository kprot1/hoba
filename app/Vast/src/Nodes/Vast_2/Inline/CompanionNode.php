<?php

namespace App\Vast\src\Nodes\Vast_2\Inline;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Traits\AddTrackingEventsNodeTrait;
use App\Vast\src\Traits\SetApiFrameworkTrait;
use App\Vast\src\Traits\SetHeightTrait;
use App\Vast\src\Traits\SetIdTrait;
use App\Vast\src\Traits\SetWidthTrait;

class CompanionNode extends AbstractNode
{
    use SetIdTrait,
        SetApiFrameworkTrait,
        SetWidthTrait,
        SetHeightTrait,

        AddTrackingEventsNodeTrait;

    public function setExpandedWidth(string $value): self
    {
        $this->setAttribute('expandedWidth', $value);
        return $this;
    }

    public function setExpandedHeight(string $value): self
    {
        $this->setAttribute('expandedHeight', $value);
        return $this;
    }

    public function addStaticResourceNode(StaticResourceNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addIFrameResourceNode(IFrameResourceNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addHtmlResourceNode(HtmlResourceNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addCompanionClickThroughNode(CompanionClickThroughNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addAltTextNode(AltTextNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addAdParametersNode(AdParametersNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}