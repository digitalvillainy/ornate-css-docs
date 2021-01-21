<?php

namespace Neoan3\Component\Typography;

use Neoan3\Component\Documentation\DocumentationController;
use Neoan3\Core\Unicore;

/**
 * Class TypographyController
 * @package Neoan3\Component\Typography
 *
 * Generated by neoan3-cli for neoan3 v3.*
 */
class TypographyController extends Unicore
{
    /**
     * Route: Typography
     */
    function init(): void
    {
        $this
            ->uni('Ornate')
            ->hook('main',
                   'typography',
                        ['links' => DocumentationController::linkCreator()])
            ->output();
    }

}