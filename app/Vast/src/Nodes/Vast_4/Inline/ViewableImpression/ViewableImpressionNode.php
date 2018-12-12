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

    public function createViewableNode(): ViewableNode
    {
        return $this->addElement(new ViewableNode());
    }

    public function createNotViewableNode(): NotViewableNode
    {
        return $this->addElement(new NotViewableNode());
    }

    public function createViewUndeterminedNode(): ViewUndeterminedNode
    {
        return $this->addElement(new ViewUndeterminedNode());
    }
}