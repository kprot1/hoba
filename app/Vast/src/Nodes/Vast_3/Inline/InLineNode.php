<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\AbstractNode;

class InLineNode extends AbstractNode
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

    public function createErrorNode(): ErrorNode
    {
        return $this->addElement(new ErrorNode());
    }

    public function createImpressionNode(): ImpressionNode
    {
        return $this->addElement(new ImpressionNode());
    }

    public function createCreativesNode(): CreativesNode
    {
        return $this->addElement(new CreativesNode());
    }

    public function createExtensionsNode(): ExtensionsNode
    {
        return $this->addElement(new ExtensionsNode());
    }

    public function createAdvertiserNode(): AdvertiserNode
    {
        return $this->addElement(new AdvertiserNode());
    }

    public function createPricingNode(): PricingNode
    {
        return $this->addElement(new PricingNode());
    }
}