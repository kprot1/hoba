<?php

namespace App\Http\Controllers;

use App\Vast\src\Constructor\XmlConstructor;
use App\Vast\src\Nodes\Vast_1\AdTitleNode;
use App\Vast\src\Nodes\Vast_2\Inline\InLineNode;
use App\Vast\src\Nodes\Vast_2\VastNode;

class TestController extends Controller
{
    public function test()
    {
        $start = microtime(true);
        $inline = new InLineNode();
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        $inline->addAdTitleNode((new AdTitleNode())->setContent('13'));
        return microtime(true) - $start;
    }

    public function est()
    {
        $start = microtime(true);

    }

    public function test1()
    {
        $xmlConstructor = new XmlConstructor(['indentString']);
        $hob = $this->createNode();

        return $xmlConstructor->fromArray([$hob])->toOutput();
    }

    public function createNode()
    {
        $start = microtime(true);

        $vast = new VastNode();

        echo 'Время выполнения скрипта: ' . (microtime(true) - $start);
    }

    private function getBigContent()
    {
        return "<A onClick=\"var i= new Image(1,1); i.src='http://app.scanscout.com/ssframework/log/log.png?a=logitemaction&RI=573242&CbC=1&CbF=true&EC=0&RC=0&SmC=2&CbM=1.0E-5&VI=44182204&admode=preroll&PRI=-32349328493284293&RprC=5&ADsn=20&VcaI=416&RrC=1&VgI=13fbab4090333fc8d691b4c61d7bd98e&AVI=142&Ust=ma&Uctry=us&CI=1247549&AC=4&PI=567&Udma=506&ADI=5773100&VclF=true';\" HREF=\"http://vaseline.com\" target=\"_blank\">
           <IMG SRC=\"http://media.scanscout.com/ads/vaseline300x250Companion.jpg\" BORDER=0 WIDTH=300 HEIGHT=250 ALT=\"Click Here\">
           </A>
           <img src=\"http://app.scanscout.com/ssframework/log/log.png?a=logitemaction&RI=573242&CbC=1&CbF=true&EC=1&RC=0&SmC=2&CbM=1.0E-5&VI=44182204&admode=preroll&PRI=-342394298999&RprC=5&ADsn=20&VcaI=416&RrC=1&VgI=4234238492842jjjk&AVI=142&Ust=ma&Uctry=us&CI=1247549&AC=4&PI=567&Udma=506&ADI=5773100&VclF=true\" height=\"1\" width=\"1\">";
    }
}
