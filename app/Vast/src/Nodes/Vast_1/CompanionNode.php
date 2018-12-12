<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class CompanionNode extends AbstractNode
{
    public function setWidth(string $width): self
    {
        $this->setAttribute('width', $width);
        return $this;
    }

    public function setId(string $id): self
    {
        $this->setAttribute('id', $id);
        return $this;
    }

    public function setResourceType(string $value): self
    {
        $this->setAttribute('resourceType', $value);
        return $this;
    }

    public function setHeight(string $value): self
    {
        $this->setAttribute('height', $value);
        return $this;
    }

    public function createCodeNode(): CodeNode
    {
        return $this->addElement(new CodeNode());
    }
}
