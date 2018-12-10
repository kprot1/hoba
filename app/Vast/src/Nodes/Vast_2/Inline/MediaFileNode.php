<?php

namespace App\Vast\src\Nodes\Vast_2\Inline;

use App\Vast\src\Nodes\AbstractNode;

class MediaFileNode extends AbstractNode
{
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

    public function setWidth(string $value): self
    {
        $this->setAttribute('width', $value);
        return $this;
    }

    public function setBitrate(string $value): self
    {
        $this->setAttribute('bitrate', $value);
        return $this;
    }

    public function setType(string $value): self
    {
        $this->setAttribute('type', $value);
        return $this;
    }

    public function setDelivery(string $value): self
    {
        $this->setAttribute('delivery', $value);
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

    public function setApiFramework(string $value): self
    {
        $this->setAttribute('apiFramework', $value);
        return $this;
    }
}