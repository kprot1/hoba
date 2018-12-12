<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\AbstractNode;

class CreativeNode extends AbstractNode
{
    public function setId(string $id): self
    {
        $this->setAttribute('id', $id);
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

    public function setApiFramework(string $value): self
    {
        $this->setAttribute('apiFramework', $value);
        return $this;
    }

    public function createLinearNode(): LinearNode
    {
        return $this->addElement(new LinearNode());
    }

    public function createCompanionAdsNode(): CompanionAdsNode
    {
        return $this->addElement(new CompanionAdsNode());
    }
}