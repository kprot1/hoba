<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Traits\SetIdTrait;

class CompanionNode extends AbstractNode
{
    use SetIdTrait;

    public function setWidth(string $value): self
    {
        $this->setAttribute('width', $value);
        return $this;
    }

    public function setHeight(string $value): self
    {
        $this->setAttribute('height', $value);
        return $this;
    }

    public function setResourceType(string $value): self
    {
        $this->setAttribute('resourceType', $value);
        return $this;
    }

    public function addCodeNode(CodeNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
