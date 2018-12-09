<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.12.2018
 * Time: 2:11
 */

namespace App\Vast\src\Nodes\Vast_2;

use \App\Vast\src\Nodes\Vast_1\VideoClicksNode as VideoClicksNode_Vast1;

class VideoClicksNode extends VideoClicksNode_Vast1
{
    public function addClickTrackingNode(ClickTrackingNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
