<?php

namespace App\Vast\src\Traits;

use App\Vast\src\Nodes\Vast_1\AdTitleNode;

trait AddAdTitleNodeTrait
{
    public function addAdTitleNode(AdTitleNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}