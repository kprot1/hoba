<?php

namespace App\Vast\src\Nodes\Vast_4\Wrapper;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\CompanionAds\AltTextNode;
use App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\CompanionAds\CompanionClickThroughNode;
use App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\CompanionAds\CompanionClickTrackingNode;
use App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\CompanionAds\HtmlResourceNode;
use App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\CompanionAds\IFrameResourceNode;
use App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\CompanionAds\StaticResourceNode;
use App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\Linear\AdParametersNode;
use App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\Linear\TrackingEventsNode;

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

    public function setAdSlotId(string $value): self
    {
        $this->setAttribute('AdSlotID', $value);
        return $this;
    }

    public function stLogoTile(string $value): self
    {
        $this->setAttribute('logoTile', $value);
        return $this;
    }

    public function stLogoTitle(string $value): self
    {
        $this->setAttribute('logoTitle', $value);
        return $this;
    }

    public function stLogoArtist(string $value): self
    {
        $this->setAttribute('logoArtist', $value);
        return $this;
    }

    public function stLogoURL(string $value): self
    {
        $this->setAttribute('logoURL', $value);
        return $this;
    }

    public function setPxRatio(string $value): self
    {
        $this->setAttribute('pxratio', $value);
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

    public function addCompanionClickTrackingNode(CompanionClickTrackingNode $node): self
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