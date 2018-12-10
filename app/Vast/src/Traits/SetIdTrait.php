<?php

namespace App\Vast\src\Traits;

trait SetIdTrait
{
    public function setId(string $id): self
    {
        $this->setAttribute('id', $id);
        return $this;
    }
}