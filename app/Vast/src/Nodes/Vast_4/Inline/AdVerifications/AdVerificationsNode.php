<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\AdVerifications;

use App\Vast\src\Nodes\AbstractNode;

class AdVerificationsNode extends AbstractNode
{
    public function setVerificationNode(VerificationNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}