<?php

namespace Dimsog\Slider;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'dimsog.slider::lang.plugin.name',
            'description' => 'dimsog.slider::lang.plugin.description',
            'author'      => 'Dimsog',
            'icon'        => 'icon-picture-o'
        ];
    }

    public function registerNavigation()
    {
        return [
            'slider' => [
                'label'       => 'dimsog.slider::lang.plugin.name',
                'url'         => Backend::url('dimsog/slider/slides'),
                'icon'        => 'icon-picture-o',
                'permissions' => ['*'],
                'order'       => 500,
                'sideMenu' => [
                    'categories' => [
                        'label'       => 'dimsog.slider::lang.categories',
                        'icon'        => 'icon-list',
                        'url'         => Backend::url('dimsog/slider/categories'),
                    ],
                    'slides' => [
                        'label'       => 'dimsog.slider::lang.slides',
                        'icon'        => 'icon-picture-o',
                        'url'         => Backend::url('dimsog/slider/slides'),
                    ]
                ]
            ]
        ];
    }
}
