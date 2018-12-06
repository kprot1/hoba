<?php

namespace App\Http\Controllers;


use App\Model\Ad\AdNode;
use App\Model\Vast\VastNode;
use bupy7\xml\constructor\XmlConstructor;

class TestController extends Controller
{
    public function test()
    {
        $xmlConstructor = new XmlConstructor();

        $hob = $this->createNode();

        $in = [
            [
                'tag' => 'Vast',
                'attributes' => [
                    'version' => '2.0'
                ],
                'elements' => [
                    [
                        'tag' => 'tag1',
                        'attributes' => [
                            'attr1' => 'val1',
                            'attr2' => 'val2',
                        ],
                    ],
                    [
                        'tag' => 'tag2',
                        'content' => 'content2',
                    ],
                    [
                        'tag' => 'tag3',
                        'elements' => [
                            [
                                'tag' => 'tag4',
                                'content' => 'content4',
                            ],
                        ],
                    ],
                ],
            ],
        ];


        echo $xmlConstructor->fromArray([$hob])->toOutput();

        return '';
    }

    public function createNode(): array
    {
        $vastNode = new VastNode();
        $vastNode->setAdNode(new AdNode());

        return json_decode(json_encode($vastNode), true);
    }
}