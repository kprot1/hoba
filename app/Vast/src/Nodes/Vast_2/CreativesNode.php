<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.12.2018
 * Time: 1:16
 */

namespace App\Vast\src\Nodes\Vast_2;


use App\Vast\src\Nodes\AbstractNode;

class CreativesNode extends AbstractNode
{
    public function addCreative(CreativeNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
