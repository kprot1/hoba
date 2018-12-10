<?php

namespace App\Vast\src\Nodes\Vast_2\Wrapper;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_2\Inline\AdSystemNode;
use App\Vast\src\Nodes\Vast_2\Inline\CreativesNode;
use App\Vast\src\Nodes\Vast_2\Inline\ErrorNode;
use App\Vast\src\Nodes\Vast_2\Inline\ImpressionNode;

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

    public function addCreativesNode(CreativesNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}