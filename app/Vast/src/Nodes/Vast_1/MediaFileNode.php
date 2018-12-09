<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 07.12.2018
 * Time: 22:29
 */

namespace App\Vast\src\Nodes\Vast_1;


use App\Vast\src\Nodes\AbstractNode;

class MediaFileNode extends AbstractNode
{
    public function setType(string $value): self
    {
        $this->setAttribute('type', $value);
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

    public function setDelivery(string $value): self
    {
        $this->setAttribute('delivery', $value);
        return $this;
    }

    public function setBitrate(string $value): self
    {
        $this->setAttribute('bitrate', $value);
        return $this;
    }

    public function addUrlNode(URLNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
