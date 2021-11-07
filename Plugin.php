<?php namespace Dimsog\Slider;

use Backend;
use System\Classes\PluginBase;

/**
 * Slider Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Slider',
            'description' => 'No description provided yet...',
            'author'      => 'Dimsog',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Dimsog\Slider\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'dimsog.slider.some_permission' => [
                'tab' => 'Slider',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'slider' => [
                'label'       => 'Slider',
                'url'         => Backend::url('dimsog/slider/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['dimsog.slider.*'],
                'order'       => 500,
            ],
        ];
    }
}
