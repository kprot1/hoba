<?php

namespace App\Vast\src\Nodes\Vast_2\Wrapper;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_2\Inline\AdSystemNode;
use App\Vast\src\Nodes\Vast_2\Inline\CreativesNode;
use App\Vast\src\Nodes\Vast_2\Inline\ErrorNode;
use App\Vast\src\Nodes\Vast_2\Inline\ImpressionNode;

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

    public function createCreativesNode(): CreativesNode
    {
        return $this->addElement(new CreativesNode());
    }
}