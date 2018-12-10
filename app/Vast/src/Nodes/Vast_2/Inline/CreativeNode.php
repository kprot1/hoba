<?php

namespace App\Vast\src\Nodes\Vast_2\Inline;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_1\CompanionAdsNode;

class CreativeNode extends AbstractNode
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }

    public function setAdId(string $value): self
    {
        $this->setAttribute('AdID', $value);
        return $this;
    }

    public function setSequence(string $value): self
    {
        $this->setAttribute('sequence', $value);
        return $this;
    }

    public function addLinearNode(LinearNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addCompanionAdsNode(CompanionAdsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}