<?php

namespace App\Vast\src\Nodes\Vast_3\Wrapper;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_3\Inline\AdSystemNode;
use App\Vast\src\Nodes\Vast_3\Inline\CreativesNode;
use App\Vast\src\Nodes\Vast_3\Inline\ErrorNode;
use App\Vast\src\Nodes\Vast_3\Inline\ExtensionsNode;
use App\Vast\src\Nodes\Vast_3\Inline\ImpressionNode;

class WrapperNode extends AbstractNode
{
    public function createAdSystemNode(): AdSystemNode
    {
        return $this->addElement(new AdSystemNode());
    }

    public function createVastAdTagUri(): VastAdTagUriNode
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

    public function createCreativesNode(): CreativesNode
    {
        return $this->addElement(new CreativesNode());
    }

    public function createExtensionsNode(): ExtensionsNode
    {
        return $this->addElement(new ExtensionsNode());
    }
}