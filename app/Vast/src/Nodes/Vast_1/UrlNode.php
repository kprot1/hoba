<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class UrlNode extends AbstractNode
{
    public $cdata = true;

    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }
}
