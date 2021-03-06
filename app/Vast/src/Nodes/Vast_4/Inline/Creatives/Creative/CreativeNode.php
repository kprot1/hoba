<?php

namespace App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\CompanionAds\CompanionAdsNode;
use App\Vast\src\Nodes\Vast_4\Inline\Creatives\Creative\Linear\LinearNode;

class CreativeNode extends AbstractNode
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }

    public function setSequence(string $value): self
    {
        $this->setAttribute('sequence', $value);
        return $this;
    }

    public function setAdId(string $value): self
    {
        $this->setAttribute('AdID', $value);
        return $this;
    }

    public function setApiFramework(string $value): self
    {
        $this->setAttribute('apiFramework', $value);
        return $this;
    }

    public function createUniversalAdIdNode(): UniversalAdIdNode
    {
        return $this->addElement(new UniversalAdIdNode());
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