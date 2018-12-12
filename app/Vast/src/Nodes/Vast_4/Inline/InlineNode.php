<?php

namespace App\Vast\src\Nodes\Vast_4\Inline;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_4\Inline\AdVerifications\AdVerificationsNode;
use App\Vast\src\Nodes\Vast_4\Inline\Creatives\CreativesNode;
use App\Vast\src\Nodes\Vast_4\Inline\ViewableImpression\ViewableImpressionNode;

class InlineNode extends AbstractNode
{
    public function createAdSystemNode(): AdSystemNode
    {
        return $this->addElement(new AdSystemNode());
    }

    public function createAdTitleNode(): AdTitleNode
    {
        return $this->addElement(new AdTitleNode());
    }

    public function createDescriptionNode(): DescriptionNode
    {
        return $this->addElement(new DescriptionNode());
    }

    public function createAdvertiserNode(): AdvertiserNode
    {
        return $this->addElement(new AdvertiserNode());
    }

    public function createPricingNode(): PricingNode
    {
        return $this->addElement(new PricingNode());
    }

    public function createErrorNode(): ErrorNode
    {
        return $this->addElement(new ErrorNode());
    }

    public function createImpressionNode(): ImpressionNode
    {
        return $this->addElement(new ImpressionNode());
    }

    public function createCategoryNode(): CategoryNode
    {
        return $this->addElement(new CategoryNode());
    }

    public function createViewableImpressionNode(): ViewableImpressionNode
    {
        return $this->addElement(new ViewableImpressionNode());
    }

    public function createAdVerificationsNode(): AdVerificationsNode
    {
        return $this->addElement(new AdVerificationsNode());
    }

    public function createCreativesNode(): CreativesNode
    {
        return $this->addElement(new CreativesNode());
    }

    public function createExtensionsNode(): ExtensionsNode
    {
        return $this->addElement(new ExtensionsNode());
    }
}