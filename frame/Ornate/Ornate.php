<?php
/**
 * Created by neoan3-cli.
 */

namespace Neoan3\Frame;

use Neoan3\Core\Serve;

/**
 * Class ornate
 * @package Neoan3\Frame
 */
class Ornate extends Serve
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Overwriting Serve's constants()
     * @return array
     */
    function constants(): array
    {
        return [
            'base' => [base],
            'link' => [
                [
                    'sizes' => '32x32',
                    'type' => 'image/png',
                    'rel' => 'icon',
                    'href' => 'asset/neoan-favicon.png'
                ]
            ],
            'stylesheet' => [
                'href' => base. './node_modules/ornate_css/scss.12ba3e41.css',
                'https://fonts.gstatic.com',
                'https://fonts.googleapis.com/css2?family=Roboto&display=swap',
                './frame/Ornate/styles.css'
            ],
            'js' => [
                ['src' => 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js']
            ]
        ];
    }
}
