<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Traits\AddUrlNodeTrait;
use App\Vast\src\Traits\SetHeightTrait;
use App\Vast\src\Traits\SetWidthTrait;

class MediaFileNode extends AbstractNode
{
    use AddUrlNodeTrait,
        SetWidthTrait,
        SetHeightTrait;

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

    public function setBitrate(string $value): self
    {
        $this->setAttribute('bitrate', $value);
        return $this;
    }
}
