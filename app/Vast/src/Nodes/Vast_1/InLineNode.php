<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Traits\AddAdTitleNodeTrait;
use App\Vast\src\Traits\AddTrackingEventsNodeTrait;

class InLineNode extends AbstractNode
{
    use AddAdTitleNodeTrait,
        AddTrackingEventsNodeTrait;

    public function addAdSystemNode(AdSystemNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addImpressionNode(ImpressionNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addVideoNode(VideoNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addCompanionAdsNode(CompanionAdsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addNonLinearAdsNode(NonLinearAdsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
