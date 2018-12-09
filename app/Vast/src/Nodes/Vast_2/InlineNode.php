<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.12.2018
 * Time: 1:07
 */

namespace App\Vast\src\Nodes\Vast_2;

use App\Vast\src\Nodes\AbstractNode;
use App\Vast\src\Nodes\Vast_1\AdSystemNode;
use App\Vast\src\Nodes\Vast_1\AdTitleNode;

class InlineNode extends AbstractNode
{
    public function addAdSystemNode(AdSystemNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addAdTitleNode(AdTitleNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addDescriptionNode(DescriptionNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addErrorNode(ErrorNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addImpressionNode(ImpressionNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addCreativesNode(CreativesNode $node): self
    {
        $this->addElement($node);
        return $this;
    }

    public function addExtensionsNode(ExtensionsNode $node): self
    {
        $this->addElement($node);
        return $this;
    }
}
