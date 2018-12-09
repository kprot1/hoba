<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.12.2018
 * Time: 1:42
 */

namespace App\Vast\src\Nodes\Vast_2;


use App\Vast\src\Nodes\AbstractNode;

class ExtensionsNode extends AbstractNode
{
    public function addExtensionNode(ExtensionNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
