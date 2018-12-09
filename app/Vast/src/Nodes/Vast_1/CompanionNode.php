<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 07.12.2018
 * Time: 22:29
 */

namespace App\Vast\src\Nodes\Vast_1;


use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_2\AltTextNode;
use App\Vast\src\Nodes\Vast_2\CompanionClickThroughNode;
use App\Vast\src\Nodes\Vast_2\HTMLResourceNode;
use App\Vast\src\Nodes\Vast_2\IFrameResourceNode;
use App\Vast\src\Nodes\Vast_2\StaticResourceNode;

class CompanionNode extends AbstractNode
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }

    public function setWidth(string $value): self
    {
        $this->setAttribute('width', $value);
        return $this;
    }

    public function setHeight(string $value): self
    {
        $this->setAttribute('height', $value);
        return $this;
    }

    public function setResourceType(string $value): self
    {
        $this->setAttribute('resourceType', $value);
        return $this;
    }

    public function addCodeNode(CodeNode $node): self
    {
        $this->addElement($node);
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

    public function addHTMLResourceNode(HTMLResourceNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addTrackingEventsNode(TrackingEventsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addCompanionClickThroughNode(CompanionClickThroughNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addAltTextNode(AltTextNode $node): self
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
