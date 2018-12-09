<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.12.2018
 * Time: 1:03
 */

namespace App\Vast\src;

use App\Vast\src\Nodes\Vast_2\AdNode;

class Vast2Creator extends Vast1Creator
{
    public static function createAdNode()
    {
        return new AdNode();
    }
}
