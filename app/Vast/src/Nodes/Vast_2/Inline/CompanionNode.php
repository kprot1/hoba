<?php

namespace App\Vast\src\Nodes\Vast_2\Inline;

use App\Vast\src\Nodes\AbstractNode;

class CompanionNode extends AbstractNode
{
    public function setWidth(string $width): self
    {
        $this->setAttribute('width', $width);
        return $this;
    }

    public function setId(string $id): self
    {
        $this->setAttribute('id', $id);
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

    public function setApiFramework(string $value): self
    {
        $this->setAttribute('apiFramework', $value);
        return $this;
    }

    public function setExpandedHeight(string $value): self
    {
        $this->setAttribute('expandedHeight', $value);
        return $this;
    }

    public function createStaticResourceNode(): StaticResourceNode
    {
        return $this->addElement(new StaticResourceNode());
    }

    public function createIFrameResourceNode(): IFrameResourceNode
    {
        return $this->addElement(new IFrameResourceNode());
    }

    public function createHtmlResourceNode(): HtmlResourceNode
    {
        return $this->addElement(new HtmlResourceNode());
    }

    public function createCompanionClickThroughNode(): CompanionClickThroughNode
    {
        return $this->addElement(new CompanionClickThroughNode());
    }

    public function createAltTextNode(): AltTextNode
    {
        return $this->addElement(new AltTextNode());
    }

    public function createAdParametersNode(): AdParametersNode
    {
        return $this->addElement(new AdParametersNode());
    }

    public function createTrackingEventsNode(): TrackingEventsNode
    {
        return $this->addElement(new TrackingEventsNode());
    }
}