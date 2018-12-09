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
    public $tag;
    public $attributes = [];
    public $elements = [];
    public $content;

    public function __construct()
    {
        $this->tag = str_replace('Node', '', (new \ReflectionClass(static::class))->getShortName());
    }

    protected function setAttribute(string $key, string $value): self
    {
        $this->attributes[$key] = $value;
        return $this;
    }

    protected function addElement(AbstractNode $element): self
    {
        $this->elements[] = $element;
        return $this;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
        return $this;
    }
}
