<?php

namespace App\Vast\src\Nodes\Vast_1;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Traits\SetIdTrait;

class UrlNode extends AbstractNode
{
    use SetIdTrait;

    public $cdata = true;

}
