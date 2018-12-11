<?php

namespace App\Http\Controllers;

use App\Vast\src\XmlConstructor\XmlConstructor;
use App\Vast\src\Nodes\Vast_1\AdIdNode;
use App\Vast\src\Nodes\Vast_1\AdNode;
use App\Vast\src\Nodes\Vast_1\AdParametersNode;
use App\Vast\src\Nodes\Vast_1\AdSystemNode;
use App\Vast\src\Nodes\Vast_1\AdTitleNode;
use App\Vast\src\Nodes\Vast_1\CodeNode;
use App\Vast\src\Nodes\Vast_1\CompanionAdsNode;
use App\Vast\src\Nodes\Vast_1\CompanionNode;
use App\Vast\src\Nodes\Vast_1\DurationNode;
use App\Vast\src\Nodes\Vast_1\InLineNode;
use App\Vast\src\Nodes\Vast_1\MediaFileNode;
use App\Vast\src\Nodes\Vast_1\MediaFilesNode;
use App\Vast\src\Nodes\Vast_1\UrlNode;
use App\Vast\src\Nodes\Vast_1\VideoAdServingTemplateNode;
use App\Vast\src\Nodes\Vast_1\VideoNode;
use App\Vast\src\Nodes\Vast_2\VastNode;

class TestController extends Controller
{
    public function tes1()
    {
        $vast = new VastNode();
        $vast->addAdNode(new \App\Vast\src\Nodes\Vast_2\AdNode());

        return $vast->toArray();
    }

    public function test()
    {
        $xmlConstructor = new XmlConstructor();

        $result = 0;

//        for($i=0;$i<10000;$i++){
//            $start = microtime(true);
//            $hob = $this->createVast1Node();
//            $output = $xmlConstructor->fromArray([$hob])->toOutput();
//            $result += (microtime(true) - $start);
//        }

        return $xmlConstructor->fromArray([$this->createVast1Node()])->toOutput();
    }



    private function createVast1Node(): array
    {
        $mainNode = new VideoAdServingTemplateNode();

        $mainNode->addAdNode(
            (new AdNode())
                ->setId('preroll-1')
                ->addInlineNode((new InLineNode())
                        ->addAdSystemNode((new AdSystemNode())->setContent('scanscout'))
                        ->addAdTitleNode((new AdTitleNode())->setContent('5773100'))
                        ->addVideoNode((new VideoNode())
                            ->addDurationNode((new DurationNode())->setContent('00:00:01'))
                            ->addAdIdNode((new AdIdNode())->setContent('preroll-1'))
                            ->addAdParametersNode((new AdParametersNode())->setApiFramework('vpaid'))
                            ->addMediaFilesNode((new MediaFilesNode())
                                ->addMediaFileNode((new MediaFileNode())
                                    ->setWidth('370')
                                    ->setType('application/x-shockwave-flash')
                                    ->setHeight('270')
                                    ->addUrlNode((new UrlNode())->setContent($this->getBigContent()))
                                )
                            )
                        )
                        ->addCompanionAdsNode((new CompanionAdsNode())
                            ->addCompanionNode((new CompanionNode())
                                ->setWidth('300')
                                ->setHeight('250')
                                ->setId('573242')
                                ->setResourceType('HTML')
                                ->addCodeNode((new CodeNode())->setContent('11312312312312312'))
                            )
                        )
                )
        );

        return $mainNode->toArray();
    }
    private function getBigContent()
    {
        return "<A onClick=\"var i= new Image(1,1); i.src='http://app.scanscout.com/ssframework/log/log.png?a=logitemaction&RI=573242&CbC=1&CbF=true&EC=0&RC=0&SmC=2&CbM=1.0E-5&VI=44182204&admode=preroll&PRI=-32349328493284293&RprC=5&ADsn=20&VcaI=416&RrC=1&VgI=13fbab4090333fc8d691b4c61d7bd98e&AVI=142&Ust=ma&Uctry=us&CI=1247549&AC=4&PI=567&Udma=506&ADI=5773100&VclF=true';\" HREF=\"http://vaseline.com\" target=\"_blank\">
           <IMG SRC=\"http://media.scanscout.com/ads/vaseline300x250Companion.jpg\" BORDER=0 WIDTH=300 HEIGHT=250 ALT=\"Click Here\">
           </A>
           <img src=\"http://app.scanscout.com/ssframework/log/log.png?a=logitemaction&RI=573242&CbC=1&CbF=true&EC=1&RC=0&SmC=2&CbM=1.0E-5&VI=44182204&admode=preroll&PRI=-342394298999&RprC=5&ADsn=20&VcaI=416&RrC=1&VgI=4234238492842jjjk&AVI=142&Ust=ma&Uctry=us&CI=1247549&AC=4&PI=567&Udma=506&ADI=5773100&VclF=true\" height=\"1\" width=\"1\">";
    }
}
