<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.12.2018
 * Time: 0:58
 */

namespace App\Vast\src\Nodes\Vast_2;

use App\Vast\src\Nodes\AbstractNode;


class AdNode extends AbstractNode
{
    public function addInlineNode(InlineNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addWrapperNode(WrapperNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
