<?php

namespace App\Vast\src;

use App\Vast\src\Nodes\Vast_1\AdIdNode;
use App\Vast\src\Nodes\Vast_1\AdNode;
use App\Vast\src\Nodes\Vast_1\AdParametersNode;
use App\Vast\src\Nodes\Vast_1\AdSystemNode;
use App\Vast\src\Nodes\Vast_1\AdTitleNode;
use App\Vast\src\Nodes\Vast_1\ClickThroughNode;
use App\Vast\src\Nodes\Vast_1\CodeNode;
use App\Vast\src\Nodes\Vast_1\CompanionAdsNode;
use App\Vast\src\Nodes\Vast_1\CompanionNode;
use App\Vast\src\Nodes\Vast_1\DurationNode;
use App\Vast\src\Nodes\Vast_1\ImpressionNode;
use App\Vast\src\Nodes\Vast_1\InLineNode;
use App\Vast\src\Nodes\Vast_1\MediaFileNode;
use App\Vast\src\Nodes\Vast_1\MediaFilesNode;
use App\Vast\src\Nodes\Vast_1\NonLinearAdsNode;
use App\Vast\src\Nodes\Vast_1\NonLinearNode;
use App\Vast\src\Nodes\Vast_1\TrackingEventsNode;
use App\Vast\src\Nodes\Vast_1\TrackingNode;
use App\Vast\src\Nodes\Vast_1\UrlNode;
use App\Vast\src\Nodes\Vast_1\VideoAdServingTemplateNode;
use App\Vast\src\Nodes\Vast_1\VideoClicksNode;
use App\Vast\src\Nodes\Vast_1\VideoNode;

class Vast1Creator
{
    public static function createVideoAdServingTemplateNode(): VideoAdServingTemplateNode
    {
        return new VideoAdServingTemplateNode();
    }

    public static function createAdNode()
    {
        return new AdNode();
    }

    public static function createInlineNode(): InLineNode
    {
        return new InLineNode();
    }

    public static function createAdSystemNode(): AdSystemNode
    {
        return new AdSystemNode();
    }

    public static function createAdTitleNode(): AdTitleNode
    {
        return new AdTitleNode();
    }

    public static function createImpressionNode(): ImpressionNode
    {
        return new ImpressionNode();
    }

    public static function createUrlNode(): UrlNode
    {
        return new UrlNode();
    }

    public static function createTrackingEventsNode(): TrackingEventsNode
    {
        return new TrackingEventsNode();
    }

    public static function createTrackingNode() : TrackingNode
    {
        return new TrackingNode();
    }

    public static function createVideoNode(): VideoNode
    {
        return new VideoNode();
    }

    public static function createDurationNode(): DurationNode
    {
        return new DurationNode();
    }

    public static function createAdIdNode(): AdIdNode
    {
        return new AdIdNode();
    }

    public static function createAdParametersNode(): AdParametersNode
    {
        return new AdParametersNode();
    }

    public static function createVideoClicksNode(): VideoClicksNode
    {
        return new VideoClicksNode();
    }

    public static function createClickThroughNode(): ClickThroughNode
    {
        return new ClickThroughNode();
    }

    public static function createMediaFilesNode(): MediaFilesNode
    {
        return new MediaFilesNode();
    }

    public static function createMediaFileNode(): MediaFileNode
    {
        return new MediaFileNode();
    }

    public static function createCompanionAdsNode(): CompanionAdsNode
    {
        return new CompanionAdsNode();
    }

    public static function createCompanionNode(): CompanionNode
    {
        return new CompanionNode();
    }

    public static function createCodeNode(): CodeNode
    {
        return new CodeNode();
    }

    public static function createNonLinearAdsNode(): NonLinearAdsNode
    {
        return new NonLinearAdsNode();
    }

    public static function createNonLinearNode(): NonLinearNode
    {
        return new NonLinearNode();
    }
}
