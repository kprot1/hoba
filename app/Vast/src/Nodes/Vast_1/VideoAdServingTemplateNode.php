<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class VideoAdServingTemplateNode extends AbstractNode
{
    public function addAdNode(AdNode $node)
    {
        $this->addElement($node);
        return $this;
    }
}
