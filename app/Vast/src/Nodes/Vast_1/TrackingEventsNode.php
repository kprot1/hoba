<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 07.12.2018
 * Time: 22:27
 */

namespace App\Vast\src\Nodes\Vast_1;


use App\Vast\src\Nodes\AbstractNode;

class TrackingEventsNode extends AbstractNode
{
    public function addTrackingNode(TrackingNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
