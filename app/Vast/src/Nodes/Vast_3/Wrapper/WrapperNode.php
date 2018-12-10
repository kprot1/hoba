<?php

namespace App\Vast\src\Nodes\Vast_3\Wrapper;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_2\Inline\AdSystemNode;
use App\Vast\src\Nodes\Vast_2\Inline\CreativesNode;
use App\Vast\src\Nodes\Vast_2\Inline\ErrorNode;
use App\Vast\src\Nodes\Vast_2\Inline\ExtensionsNode;
use App\Vast\src\Nodes\Vast_2\Inline\ImpressionNode;
use App\Vast\src\Nodes\Vast_2\Wrapper\VastAdTagUriNode;

class WrapperNode extends AbstractNode
{
    public function addAdSystemNode(AdSystemNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addVastAdTagUri(VastAdTagUriNode $node): self
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

    public function addExtensionsNode(ExtensionsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}