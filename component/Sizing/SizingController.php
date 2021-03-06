<?php

namespace Neoan3\Component\Sizing;

use Neoan3\Core\Unicore;

/**
 * Class SizingController
 * @package Neoan3\Component\Sizing
 *
 * Generated by neoan3-cli for neoan3 v3.*
 */

class SizingController extends Unicore{
    /**
     * Route: Sizing
     */
    function init(): void
    {
        $this
            ->uni('Ornate')
            ->hook('main', 'sizing')
            ->output();
    }

}