<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\ViewableImpression;

use App\Vast\src\Nodes\AbstractNode;

class ViewableImpressionNode extends AbstractNode
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }

    public function addViewableNode(ViewableNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addNotViewableNode(NotViewableNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addViewUndeterminedNode(ViewUndeterminedNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}