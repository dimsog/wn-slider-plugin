<?php

namespace Dimsog\Slider;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Slider',
            'description' => 'No description provided yet...',
            'author'      => 'Dimsog',
            'icon'        => 'icon-picture-o'
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'slider' => [
                'label'       => 'Slider',
                'url'         => Backend::url('dimsog/slider/mycontroller'),
                'icon'        => 'icon-picture-o',
                'permissions' => ['*'],
                'order'       => 500,
            ],
        ];
    }
}
