<?php

namespace App\Vast\src\Nodes\Vast_4\Wrapper;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_4\Error\ErrorNode;
use App\Vast\src\Nodes\Vast_4\Inline\AdSystemNode;
use App\Vast\src\Nodes\Vast_4\Inline\AdVerifications\AdVerificationsNode;
use App\Vast\src\Nodes\Vast_4\Inline\Creatives\CreativesNode;
use App\Vast\src\Nodes\Vast_4\Inline\ExtensionsNode;
use App\Vast\src\Nodes\Vast_4\Inline\ImpressionNode;
use App\Vast\src\Nodes\Vast_4\Inline\PricingNode;
use App\Vast\src\Nodes\Vast_4\Inline\ViewableImpression\ViewableImpressionNode;

class WrapperNode extends AbstractNode
{
    public function addAdSystemNode(AdSystemNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addVastAdTagUriNode(VastAdTagUriNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addErrorNode(ErrorNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addImpressionNode(ImpressionNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addPricingNode(PricingNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addViewableImpressionNode(ViewableImpressionNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addAdVerificationsNode(AdVerificationsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addCreativesNode(CompanionAdsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addExtensionsNode(ExtensionsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}