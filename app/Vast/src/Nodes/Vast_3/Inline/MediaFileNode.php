<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\AbstractNode;

class MediaFileNode extends AbstractNode
{
    public function setWidth(string $width): self
    {
        $this->setAttribute('width', $width);
        return $this;
    }

    public function setId(string $id): self
    {
        $this->setAttribute('id', $id);
        return $this;
    }

    public function setHeight(string $value): self
    {
        $this->setAttribute('height', $value);
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

    public function setMinBitrate(string $value): self
    {
        $this->setAttribute('minBitrate', $value);
        return $this;
    }

    public function setMaxBitrate(string $value): self
    {
        $this->setAttribute('maxBitrate', $value);
        return $this;
    }

    public function setCodec(string $value): self
    {
        $this->setAttribute('codec', $value);
        return $this;
    }
}
