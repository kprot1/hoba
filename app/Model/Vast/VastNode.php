<?php

namespace App\Model\Vast;


use App\Model\AbstractNode;
use App\Model\Ad\AdNode;

class VastNode extends AbstractNode
{
    public $tag = 'Vast';
    public $attributes = [
        'version' => '2.0'
    ];

    public function __construct()
    {
        parent::__construct($this->tag);
    }

    public function setAdNode(AdNode $ad): self
    {
        $this->elements[] = $ad;
        return $this;
    }
}