<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class VideoAdServingTemplateNode extends AbstractNode
{
    public function createAdNode(): AdNode
    {
        return $this->addElement(new AdNode());
    }
}
