<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.12.2018
 * Time: 2:11
 */

namespace App\Vast\src\Nodes\Vast_2;


use App\Vast\src\Nodes\AbstractNode;

class ClickTrackingNode extends AbstractNode
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }
}
