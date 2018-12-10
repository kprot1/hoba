<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\Vast_2\Inline\CreativeNode as CreativeNode_Vast2;

class CreativeNode extends CreativeNode_Vast2
{
    public function setApiFramework(string $value): self
    {
        $this->setAttribute('apiFramework', $value);
        return $this;
    }
}