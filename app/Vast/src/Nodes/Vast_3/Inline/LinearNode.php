<?php

namespace App\Vast\src\Nodes\Vast_3\Inline;

use App\Vast\src\Nodes\Vast_1\DurationNode;
use App\Vast\src\Nodes\Vast_1\MediaFilesNode;
use App\Vast\src\Nodes\Vast_1\TrackingEventsNode;
use App\Vast\src\Nodes\Vast_2\Inline\AdParametersNode;
use App\Vast\src\Nodes\Vast_2\Inline\LinearNode as LinearNode_Vast2;
use App\Vast\src\Nodes\Vast_2\Inline\VideoClicksNode;

/**
 * @method addDurationNode(DurationNode $node) : LinearNode_Vast2
 * @method addTrackingEventsNode(TrackingEventsNode $node) : LinearNode_Vast2
 * @method addAdParametersNode(AdParametersNode $node) : LinearNode_Vast2
 * @method addVideoClicksNode(VideoClicksNode $node) : LinearNode_Vast2
 * @method addMediaFilesNode(MediaFilesNode $node) : LinearNode_Vast2
 */
class LinearNode extends LinearNode_Vast2
{
    public function setSkipOffset(string $value): self
    {
        $this->setAttribute('skipoffset', $value);
        return $this;
    }
}