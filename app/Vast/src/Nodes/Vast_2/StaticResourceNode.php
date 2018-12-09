<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.12.2018
 * Time: 13:24
 */

namespace App\Vast\src\Nodes\Vast_2;


use App\Vast\src\Nodes\AbstractNode;

class StaticResourceNode extends AbstractNode
{
    public function setCreativeType(string $value): self
    {
        $this->setAttribute('creativeType', $value);
    }
}
