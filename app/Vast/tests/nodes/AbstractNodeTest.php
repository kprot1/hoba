<?php

namespace App\Vast\tests\nodes;

use App\Vast\src\Nodes\AbstractNode;
use PHPUnit\Framework\TestCase;

class AbstractNodeTest extends TestCase
{
    public function testCreate()
    {
        $node = $this->createAnonymousNode();
        $this->assertInstanceOf(AbstractNode::class, $node);
    }

    public function testSetContentMethod()
    {
        $node = $this->createAnonymousNode();
        $node->setContent('123');
        $this->assertEquals('123', $node->getContent());
        $node->setContent('asdfasdfasd');
        $this->assertEquals('asdfasdfasd', $node->getContent());
    }

    public function testSetAttributeMethod()
    {
        $node = $this->createAnonymousNode();

        $this->assertEquals([], $node->getAttributes());

        $node->setAttribute('id', '1.0');
        $this->assertEquals(['id' => '1.0'], $node->getAttributes());

        $node->setAttribute('version', '2.0');
        $this->assertEquals(['id' => '1.0', 'version' => '2.0'], $node->getAttributes());
    }

    public function testAddElementMethod()
    {
        $node = $this->createAnonymousNode();
        $node1 = $this->createAnonymousNode();

        $node->addElement($node1);
        $this->assertEquals([$node1], $node->getElements());

        $node2 = $this->createAnonymousNode();
        $node->addElement($node2);
        $this->assertEquals([$node1, $node2], $node->getElements());
    }

    public function testInitialTagMethod()
    {
        $node = $this->createAnonymousNode();
        $this->assertEquals('Test', $node->getTag());
    }

    public function testToArrayMethod()
    {
        $node = $this->createAnonymousNode();

        $this->assertEquals(
            [
                'tag' => 'Test',
                'attributes' => [],
                'elements' => [],
                'content' => null
            ],
            $node->getResultToArrayMethod()
        );

        $node1 = $this->createAnonymousNode();
        $node1->setAttribute('version', '2.0');
        $node1->setContent('123');

        $node->setAttribute('id', '1.0');
        $node->setAttribute('width', '270');
        $node->setContent('111');
        $node->addElement($node1);

        $this->assertEquals(
            [
                'tag' => 'Test',
                'attributes' => [
                    'id' => '1.0',
                    'width' => '270'
                ],
                'elements' => [
                    [
                        'tag' => 'Test',
                        'attributes' => [
                            'version' => '2.0'
                        ],
                        'elements' => [],
                        'content' => '123'
                    ]
                ],
                'content' => '111'
            ],
            $node->getResultToArrayMethod()
        );

    }

    public function testToXmlMethod()
    {
        $node = $this->createAnonymousNode();

        $node1 = $this->createAnonymousNode();
        $node1->setAttribute('version', '2.0');
        $node1->setContent('123');

        $node->setAttribute('id', '1.0');
        $node->setAttribute('width', '270');
        $node->addElement($node1);

        $this->assertEquals($this->resultToXmlWithoutContent(), $node->toXml());

        $node->setContent('111');

        $this->assertEquals($this->resultToXmlWithContent(), $node->toXml());
    }

    private function createAnonymousNode()
    {
        return new class extends AbstractNode {
            public function getTag()
            {
                return $this->tag;
            }

            public function getAttributes()
            {
                return $this->attributes;
            }

            public function setAttribute(string $key, string $value): AbstractNode
            {
                return parent::setAttribute($key, $value); // TODO: Change the autogenerated stub
            }

            public function getElements()
            {
                return $this->elements;
            }

            public function addElement($element)
            {
                return parent::addElement($element); // TODO: Change the autogenerated stub
            }

            public function getContent()
            {
                return $this->content;
            }

            public function getResultToArrayMethod()
            {
                return $this->toArray();
            }

            protected function initialTag()
            {
                $this->tag = 'Test';
            }
        };
    }

    private function resultToXmlWithoutContent()
    {
        return <<<AOF
<?xml version="1.0" encoding="UTF-8"?>
<Test id="1.0" width="270">
    <Test version="2.0">123</Test>
</Test>

AOF;
    }

    private function resultToXmlWithContent()
    {
        return <<<AOF
<?xml version="1.0" encoding="UTF-8"?>
<Test id="1.0" width="270">111</Test>

AOF;
    }
}