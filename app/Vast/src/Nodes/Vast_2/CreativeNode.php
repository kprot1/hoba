<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.12.2018
 * Time: 1:18
 */

namespace App\Vast\src\Nodes\Vast_2;


use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_1\CompanionAdsNode;
use App\Vast\src\Nodes\Vast_1\NonLinearAdsNode;

class CreativeNode extends AbstractNode
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }

    public function setSequence(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }

    public function setAdId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }

    public function addLinearNode(LinearNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addCompanionAds(CompanionAdsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addNonLinearAds(NonLinearAdsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
