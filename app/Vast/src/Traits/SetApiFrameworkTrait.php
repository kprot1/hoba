<?php
/**
 * Created by PhpStorm.
 * User: jinglse
 * Date: 10.12.18
 * Time: 18:14
 */

namespace App\Vast\src\Traits;

trait SetApiFrameworkTrait
{
    public function setApiFramework(string $value): self
    {
        $this->setAttribute('apiFramework', $value);
        return $this;
    }
}