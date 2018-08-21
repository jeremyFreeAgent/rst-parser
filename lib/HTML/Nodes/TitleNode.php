<?php

declare(strict_types=1);

namespace Gregwar\RST\HTML\Nodes;

use Gregwar\RST\Environment;
use Gregwar\RST\Nodes\TitleNode as Base;

class TitleNode extends Base
{
    public function render() : string
    {
        $anchor = Environment::slugify((string) $this->value);

        return '<a id="' . $anchor . '"></a><h' . $this->level . '>' . $this->value . '</h' . $this->level . '>';
    }
}
