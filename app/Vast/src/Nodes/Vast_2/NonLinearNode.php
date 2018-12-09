<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.12.2018
 * Time: 13:35
 */

namespace App\Vast\src\Nodes\Vast_2;

use App\Vast\src\Nodes\Vast_1\AdParametersNode;
use \App\Vast\src\Nodes\Vast_1\NonLinearNode as NonLinearNode_Vast1;

class NonLinearNode extends NonLinearNode_Vast1
{
    public function setExpandedWidth(string $value): self
    {
        $this->setAttribute('expendedWidth', $value);
        return $this;
    }

    public function setExpandedHeight(string $value): self
    {
        $this->setAttribute('expandedHeight', $value);
        return $this;
    }

    public function setScalable(string $value): self
    {
        $this->setAttribute('scalable', $value);
        return $this;
    }

    public function setMaintainAspectRatio(string $value): self
    {
        $this->setAttribute('maintainAspectRatio', $value);
        return $this;
    }

    public function setMinSuggestedDuration(string $value): self
    {
        $this->setAttribute('minSuggestedDuration', $value);
        return $this;
    }

    public function addStaticResourceNode(StaticResourceNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addIFrameResourceNode(IFrameResourceNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addHtmlResourceNode(HTMLResourceNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addNonLinearClickThroughNode(NonLinearClickThroughNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addAdParametersNode(AdParametersNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
