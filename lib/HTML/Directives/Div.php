<?php

declare(strict_types=1);

namespace Gregwar\RST\HTML\Directives;

use Gregwar\RST\Nodes\Node;
use Gregwar\RST\Nodes\WrapperNode;
use Gregwar\RST\Parser;
use Gregwar\RST\SubDirective;

/**
 * Divs a sub document in a div with a given class
 */
class Div extends SubDirective
{
    public function getName() : string
    {
        return 'div';
    }

    /**
     * @param string[] $options
     */
    public function processSub(Parser $parser, ?Node $document, string $variable, string $data, array $options) : ?Node
    {
        return new WrapperNode($document, '<div class="' . $data . '">', '</div>');
    }
}
