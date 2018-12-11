<?php

namespace App\Vast\tests\nodes\vast_1;

use App\Vast\src\Factory\Factory;
use PHPUnit\Framework\TestCase;

abstract class AbstractTest extends TestCase
{
    protected function createVastNode()
    {
        $factory = new Factory();
        return $factory->createVast1();
    }

    protected function createInlineNode()
    {
        return $this
            ->createVastNode()
            ->createAdNode()
            ->createInLineNode();
    }
}
