<?php

namespace App\Vast\src\Traits;

trait SetResourceTypeTrait
{
    public function setResourceType(string $value): self
    {
        $this->setAttribute('resourceType', $value);
        return $this;
    }
}