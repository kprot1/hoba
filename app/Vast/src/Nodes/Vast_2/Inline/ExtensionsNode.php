<?php

namespace App\Vast\src\Nodes\Vast_2\Inline;

use App\Vast\src\Nodes\AbstractNode;

class ExtensionsNode extends AbstractNode
{
    public function addExtension(ExtensionNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}