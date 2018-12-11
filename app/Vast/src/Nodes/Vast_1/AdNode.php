<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Traits\SetIdTrait;

class AdNode extends AbstractNode
{
    use SetIdTrait;

    public function createInLineNode(): InLineNode
    {
        return $this->addElement(new InLineNode());
    }
}
