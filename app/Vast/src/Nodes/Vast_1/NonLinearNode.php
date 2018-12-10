<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Traits\AddUrlNodeTrait;
use App\Vast\src\Traits\SetApiFrameworkTrait;
use App\Vast\src\Traits\SetHeightTrait;
use App\Vast\src\Traits\SetIdTrait;
use App\Vast\src\Traits\SetResourceTypeTrait;
use App\Vast\src\Traits\SetWidthTrait;

class NonLinearNode extends AbstractNode
{
    use SetIdTrait,
        SetWidthTrait,
        SetHeightTrait,
        SetApiFrameworkTrait,
        SetResourceTypeTrait,

        AddUrlNodeTrait;

    public function setCreativeType(string $value): self
    {
        $this->setAttribute('creativeType', $value);
        return $this;
    }
}
