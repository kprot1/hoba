<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class InLineNode extends AbstractNode
{
    public function createAdSystemNode(): AdSystemNode
    {
        return $this->addElement(new AdSystemNode());
    }

    public function createAdTitleNode(): AdTitleNode
    {
        return $this->addElement(new AdTitleNode());
    }

    public function createImpressionNode(): ImpressionNode
    {
        return $this->addElement(new ImpressionNode());
    }

    public function createTrackingEventsNode(): TrackingEventsNode
    {
        return $this->addElement(new TrackingEventsNode);
    }

    public function createVideoNode(): VideoNode
    {
        return $this->addElement(new VideoNode());
    }

    public function createCompanionAdsNode(): CompanionAdsNode
    {
        return $this->addElement(new CompanionAdsNode());
    }

    public function createNonLinearAdsNode(): NonLinearAdsNode
    {
        return $this->addElement(new NonLinearAdsNode());
    }
}
