<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.12.2018
 * Time: 2:01
 */

namespace App\Vast\src\Nodes\Vast_2;

use \App\Vast\src\Nodes\Vast_1\MediaFileNode as MediaFileNode_Vast1;

class MediaFileNode extends MediaFileNode_Vast1
{
    public function setId(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }

    public function setScalable(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }

    public function setMaintainAspectRatio(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }

    public function setApiFramework(string $value): self
    {
        $this->setAttribute('id', $value);
        return $this;
    }
}
