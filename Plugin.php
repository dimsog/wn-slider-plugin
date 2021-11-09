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
                'url'         => Backend::url('dimsog/slider/mycontroller'),
                'icon'        => 'icon-picture-o',
                'permissions' => ['*'],
                'order'       => 500,
            ]
        ];
    }
}
