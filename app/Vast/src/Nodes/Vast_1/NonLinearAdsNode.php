<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 07.12.2018
 * Time: 22:29
 */

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;

class NonLinearAdsNode extends AbstractNode
{
    public function addNonLinearNode(NonLinearNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
