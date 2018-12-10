<?php

namespace App\Vast\src\Traits;

use App\Vast\src\Nodes\Vast_1\UrlNode;

trait AddUrlNodeTrait
{
    public function addUrlNode(UrlNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}