<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 07.12.2018
 * Time: 22:32
 */

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
