<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 07.12.2018
 * Time: 22:14
 */

namespace App\Vast\src\Nodes;


abstract class AbstractNode
{
    protected $tag;
    protected $attributes = [];
    protected $elements = [];
    protected $content;

    public function __construct()
    {
        $this->tag = str_replace('Node', '', (new \ReflectionClass(static::class))->getShortName());
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

    public function setContent(string $content)
    {
        $this->content = $content;
        return $this;
    }

    public function toArray()
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
