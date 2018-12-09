<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 07.12.2018
 * Time: 22:30
 */

namespace App\Vast\src\Nodes\Vast_1;


use App\Vast\src\Nodes\AbstractNode;

class NonLinearNode extends AbstractNode
{
    public function setWidth(string $value): self
    {
        $this->setAttribute('width', $value);
        return $this;
    }

    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
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

    public function setCreativeType(string $value): self
    {
        $this->setAttribute('creativeType', $value);
        return $this;
    }

    public function setApiFramework(string $value): self
    {
        $this->setAttribute('apiFramework', $value);
        return $this;
    }

    public function addUrlNode(URLNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
