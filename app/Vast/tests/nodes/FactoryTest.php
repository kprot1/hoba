<?php

namespace App\Vast\tests\nodes;

use App\Vast\src\Factory\Factory;
use App\Vast\src\Nodes\Vast_1\VideoAdServingTemplateNode;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testCreate()
    {
        $factory = $this->createFactory();
        $this->assertInstanceOf(Factory::class, $factory);
    }

    public function testCreatingVastNodes()
    {
        $factory = $this->createFactory();

        $vast1 = $factory->createVast1();
        $this->assertInstanceOf(VideoAdServingTemplateNode::class, $vast1);
        $this->assertXmlStringEqualsXmlString('<VideoAdServingTemplate/>', $vast1->toXml());

        $vast2 = $factory->createVast2();
        $this->assertInstanceOf( \App\Vast\src\Nodes\Vast_2\VastNode::class, $vast2);
        $this->assertXmlStringEqualsXmlString('<Vast version="2.0"/>', $vast2->toXml());

        $vast3 = $factory->createVast3();
        $this->assertInstanceOf(\App\Vast\src\Nodes\Vast_3\VastNode::class, $vast3);
        $this->assertXmlStringEqualsXmlString('<Vast version="3.0"/>', $vast3->toXml());

        $vast4 = $factory->createVast4();
        $this->assertInstanceOf(\App\Vast\src\Nodes\Vast_4\VastNode::class, $vast4);
        $this->assertXmlStringEqualsXmlString('<Vast version="4.0"/>', $vast4->toXml());
    }

    private function createFactory()
    {
        return new Factory();
    }
}
