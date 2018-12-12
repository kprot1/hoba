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
    public function createAdSystemNode(): AdSystemNode
    {
        return $this->addElement(new AdSystemNode());
    }

    public function createVastAdTagUriNode(): VastAdTagUriNode
    {
        return $this->addElement(new VastAdTagUriNode());
    }

    public function createErrorNode(): ErrorNode
    {
        return $this->addElement(new ErrorNode());
    }

    public function createImpressionNode(): ImpressionNode
    {
        return $this->addElement(new ImpressionNode());
    }

    public function createPricingNode(): PricingNode
    {
        return $this->addElement(new PricingNode());
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