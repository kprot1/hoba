<?php

namespace App\Vast\src\Nodes\Vast_2\Inline;

use App\Vast\src\Nodes\AbstractNode;

class CompanionNode extends AbstractNode
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }

    public function setWidth(string $value): self
    {
        $this->setAttribute('width', $value);
        return $this;
    }

    public function setHeight(string $value): self
    {
        $this->setAttribute('height', $value);
        return $this;
    }

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

    public function setApiFramework(string $value): self
    {
        $this->setAttribute('apiFramework', $value);
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

    public function addTrackingEventsNode(TrackingEventsNode $node): self
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