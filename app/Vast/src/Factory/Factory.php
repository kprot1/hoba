<?php

namespace App\Vast\src\Factory;

use App\Vast\src\Nodes\Vast_1\VideoAdServingTemplateNode;

class Factory
{
    public function create(string $version = '2.0')
    {
        switch ($version) {
            case '1,0':
                return $this->createVast1();
            case '2.0':
                return $this->createVast2();
            case '3.0':
                return $this->createVast3();
            case '4.0':
                return $this->createVast4();
            default:
                return $this->createVast2();
        }
    }

    private function createVast1()
    {
        return new VideoAdServingTemplateNode();
    }

    private function createVast2()
    {
        return new \App\Vast\src\Nodes\Vast_2\VastNode();
    }

    private function createVast3()
    {
        return new \App\Vast\src\Nodes\Vast_3\VastNode();
    }

    private function createVast4()
    {
        return new \App\Vast\src\Nodes\Vast_4\VastNode();
    }
}