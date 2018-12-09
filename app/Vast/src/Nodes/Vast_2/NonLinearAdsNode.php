<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.12.2018
 * Time: 13:33
 */

namespace App\Vast\src\Nodes\Vast_2;

use \App\Vast\src\Nodes\Vast_1\NonLinearAdsNode as NonLinearAdsNode_Vast1;
use App\Vast\src\Nodes\Vast_1\TrackingEventsNode;

class NonLinearAdsNode extends NonLinearAdsNode_Vast1
{
    public function addTrackingEventsNode(TrackingEventsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
