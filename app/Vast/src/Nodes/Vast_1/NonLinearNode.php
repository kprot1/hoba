<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Traits\SetIdTrait;

class NonLinearNode extends AbstractNode
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

    public function setCreativeType(string $value): self
    {
        $this->setAttribute('creativeType', $value);
        return $this;
    }

    public function setApiFramework(string $value): self
    {
        $this->setAttribute('apiFramework', $value);
        return $this;
    }

    public function addUrlNode(UrlNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
