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
        $this->hook('header','navbar');
        $this->hook('footer','footer');
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
                'href' => base. './node_modules/ornate_css/ornate.css',
                'https://fonts.gstatic.com',
                'https://fonts.googleapis.com/css2?family=Roboto&display=swap',
                'https://fonts.googleapis.com/css2?family=Arizonia&display=swap',
                './frame/Ornate/styles.css'
            ],
            'js' => [
                ['src' => base . 'node_modules/axios/dist/axios.min.js'],
                ['src'=> base . '/frame/Ornate/axios-wrapper.js', 'data' => ['base' => base]],
                ['src' => 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js']
            ]
        ];
    }
}
