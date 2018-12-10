<?php

namespace App\Vast\src\Traits;

trait SetWidthTrait
{
    public function setWidth(string $width): self
    {
        $this->setAttribute('width', $width);
        return $this;
    }
}