<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class ImpressionNode extends AbstractNode
{
    public function createUrlNode(): UrlNode
    {
        return $this->addElement(new UrlNode());
    }
}
