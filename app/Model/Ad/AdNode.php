<?php

namespace App\Model\Ad;

use App\Model\AbstractNode;

class AdNode extends AbstractNode
{
    public $tag = 'Ad';

    public function __construct()
    {
        parent::__construct($this->tag);
    }
}