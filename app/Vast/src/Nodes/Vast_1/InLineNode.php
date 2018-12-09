<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 07.12.2018
 * Time: 22:25
 */

namespace App\Vast\src\Nodes\Vast_1;


use App\Vast\src\Nodes\AbstractNode;

class InLineNode extends AbstractNode
{
    public function addAdSystemNode(AdSystemNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addAdTitleNode(AdTitleNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addImpressionNode(ImpressionNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addTrackingEventsNode(TrackingEventsNode $node): self
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
