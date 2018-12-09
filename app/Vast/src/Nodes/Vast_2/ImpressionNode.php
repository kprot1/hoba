<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.12.2018
 * Time: 1:16
 */

namespace App\Vast\src\Nodes\Vast_2;

use App\Vast\src\Nodes\Vast_1\ImpressionNode as ImpressionNode_Vast1;

class ImpressionNode extends ImpressionNode_Vast1
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }
}
