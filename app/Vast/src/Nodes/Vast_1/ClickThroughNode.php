<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 07.12.2018
 * Time: 22:28
 */

namespace App\Vast\src\Nodes\Vast_1;


use App\Vast\src\Nodes\AbstractNode;

class ClickThroughNode extends AbstractNode
{
    public function addUrlNode(URLNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
