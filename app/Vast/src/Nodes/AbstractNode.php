<?php

namespace App\Vast\src\Nodes;

use App\Vast\src\XmlConstructor\XmlConstructor;

abstract class AbstractNode
{
    protected $tag;
    protected $attributes = [];
    protected $elements = [];
    protected $content;

    public function __construct()
    {
        $this->initialTag();
    }

    public function toXml(): string
    {
        $xmlConstructor = new XmlConstructor();

        return $xmlConstructor->fromArray([$this->toArray()])->toOutput();
    }

    public function setContent(string $content)
    {
        $this->content = $content;
        return $this;
    }

    protected function setAttribute(string $key, string $value): self
    {
        $this->attributes[$key] = $value;
        return $this;
    }

    protected function addElement($element)
    {
        $this->elements[] = $element;
        return $element;
    }

    protected function initialTag()
    {
        $this->tag = str_replace('Node', '', (new \ReflectionClass(static::class))->getShortName());
    }

    protected function toArray(): array
    {
        $getElementsRecourse = function (array $elements) {
            $result = [];
            foreach ($elements as $element) {
                $result[] = $element->toArray();
            }
            return $result;
        };

        return [
            'tag' => $this->tag,
            'attributes' => $this->attributes,
            'elements' => $getElementsRecourse($this->elements),
            'content' => $this->content
        ];
    }
}
