<?php

namespace App\Vast\src\Traits;

trait SetApiFrameworkTrait
{
    public function setApiFramework(string $value): self
    {
        $this->setAttribute('apiFramework', $value);
        return $this;
    }
}