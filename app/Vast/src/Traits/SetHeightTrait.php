<?php

namespace App\Vast\src\Traits;

trait SetHeightTrait
{
    public function setHeight(string $value): self
    {
        $this->setAttribute('height', $value);
        return $this;
    }
}