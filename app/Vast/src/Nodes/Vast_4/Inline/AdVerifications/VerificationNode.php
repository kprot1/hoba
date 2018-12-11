<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\AdVerifications;

use App\Vast\src\Nodes\AbstractNode;

class VerificationNode extends AbstractNode
{
    public function setVendor(string $value): self
    {
        $this->setAttribute('vendor', $value);
        return $this;
    }

    public function addJavaScriptResourceNode(JavaScriptResourceNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addFlashResourceNode(FlashResourceNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addViewableImpressionNode(ViewableImpressionNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}