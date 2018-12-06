<?php

namespace App\Model;

abstract class AbstractNode
{
    public $tag = null;
    public $attributes = [];
    public $elements = [];
    public $content = null;

    public function __construct(string $tag)
    {
        $this->tag = $tag;
    }
}