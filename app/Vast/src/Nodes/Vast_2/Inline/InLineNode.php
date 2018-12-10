<?php

namespace App\Vast\src\Nodes\Vast_2\Inline;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_1\AdTitleNode;

class InLineNode extends AbstractNode
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