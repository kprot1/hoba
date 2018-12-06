<?php

namespace App\Http\Controllers;

use App\Model\Ad\AdNode;
use App\Model\Vast\VastNode;
use App\Vast\src\Constructor\XmlConstructor;
use Zend\Diactoros\Response\XmlResponse;

class TestController extends Controller
{
    public function test()
    {
        $xmlConstructor = new XmlConstructor();
        $hob = $this->createNode();

        return $xmlConstructor->fromArray([$hob])->toOutput();
    }

    public function createNode(): array
    {
        $vastNode = new VastNode();
        $vastNode->setAdNode(new AdNode());

        return json_decode(json_encode($vastNode), true);
    }
}
