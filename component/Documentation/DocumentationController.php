<?php

namespace Neoan3\Component\Documentation;

use Neoan3\Core\Unicore;

/**
 * Class DocumentationController
 * @package Neoan3\Component\Documentation
 *
 * Generated by neoan3-cli for neoan3 v3.*
 */

class DocumentationController extends Unicore{
    /**
     * Route: Documentation
     */
    function init(): void
    {
        $this
            ->uni('Ornate')
            ->hook('main', 'documentation')
            ->output();
    }

}