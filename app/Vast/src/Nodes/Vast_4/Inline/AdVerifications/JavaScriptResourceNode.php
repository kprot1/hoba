<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\AdVerifications;

use App\Vast\src\Nodes\AbstractNode;

class JavaScriptResourceNode extends AbstractNode
{
    public function setApiFramework(string $value): self
    {
        $this->setAttribute('apiFramework', $value);
        return $this;
    }
}