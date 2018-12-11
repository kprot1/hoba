<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Traits\SetHeightTrait;
use App\Vast\src\Traits\SetIdTrait;
use App\Vast\src\Traits\SetResourceTypeTrait;
use App\Vast\src\Traits\SetWidthTrait;

class CompanionNode extends AbstractNode
{
    use SetIdTrait,
        SetWidthTrait,
        SetHeightTrait,
        SetResourceTypeTrait;

    public function createCodeNode(): CodeNode
    {
        return $this->addElement(new CodeNode());
    }
}
