<?php

declare(strict_types=1);

namespace Doctrine\RST\HTML\Directives;

use Doctrine\RST\Directive;
use Doctrine\RST\HTML\Nodes\ImageNode;
use Doctrine\RST\Nodes\Node;
use Doctrine\RST\Parser;

/**
 * Renders an image, example :
 *
 * .. image:: image.jpg
 *      :width: 100
 *      :title: An image
 *
 */
class Image extends Directive
{
    public function getName() : string
    {
        return 'image';
    }

    /**
     * @param string[] $options
     */
    public function processNode(Parser $parser, string $variable, string $data, array $options) : ?Node
    {
        $environment = $parser->getEnvironment();
        $url         = $environment->relativeUrl($data);

        return new ImageNode($url, $options);
    }
}
