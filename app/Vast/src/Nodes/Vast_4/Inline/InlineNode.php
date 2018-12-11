<?php

namespace App\Vast\src\Nodes\Vast_4\Inline;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_4\Inline\AdVerifications\AdVerificationsNode;
use App\Vast\src\Nodes\Vast_4\Inline\Creatives\CreativesNode;
use App\Vast\src\Nodes\Vast_4\Inline\ViewableImpression\ViewableImpressionNode;

class InlineNode extends AbstractNode
{
    public function addAdSystemNode(AdSystemNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addAdTitleNode(AdTitleNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addDescriptionNode(DescriptionNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

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

    public function addCategoryNode(CategoryNode $node): self
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

    public function addCreativesNode(CreativesNode $node): self
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