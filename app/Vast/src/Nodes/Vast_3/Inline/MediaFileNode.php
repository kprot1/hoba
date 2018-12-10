<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\Vast_2\Inline\MediaFileNode as MediaFileNode_Vast2;

/**
 *
 */
class MediaFileNode extends MediaFileNode_Vast2
{
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
