<?php

namespace App\Vast\src\Nodes\Vast_4\Inline;

use App\Vast\src\Nodes\AbstractNode;

class ExtensionsNode extends AbstractNode
{
    public function addExtensionNode(ExtensionNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}