<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Traits\AddUrlNodeTrait;
use App\Vast\src\Traits\SetApiFrameworkTrait;
use App\Vast\src\Traits\SetIdTrait;
use App\Vast\src\Traits\SetWidthTrait;

class NonLinearNode extends AbstractNode
{
    use SetIdTrait,
        SetApiFrameworkTrait,
        AddUrlNodeTrait,
        SetWidthTrait;

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
}
