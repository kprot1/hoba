<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\Vast_2\Inline\TrackingNode as TrackingNode_Vast2;
use App\Vast\src\Traits\AddUrlNodeTrait;

class TrackingNode extends TrackingNode_Vast2
{
    use AddUrlNodeTrait;
}
