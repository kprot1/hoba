<?php

namespace App\Vast\src\Factory;

use App\Vast\src\Nodes\Vast_1\VideoAdServingTemplateNode;

class Factory
{
    public function createVast1()
    {
        return new VideoAdServingTemplateNode();
    }

    public function createVast2()
    {
        return
            (new \App\Vast\src\Nodes\Vast_2\VastNode())
            ->setVersion('2.0');
    }

    public function createVast3()
    {
        return
            (new \App\Vast\src\Nodes\Vast_3\VastNode())
            ->setVersion('3.0');
    }

    public function createVast4()
    {
        return
            (new \App\Vast\src\Nodes\Vast_4\VastNode())
            ->setVersion('4.0');
    }
}