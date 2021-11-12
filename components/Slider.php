<?php

namespace Dimsog\Slider\Components;

use Cms\Classes\ComponentBase;
use Dimsog\Slider\Models\Category;

class Slider extends ComponentBase
{
    public function onRun()
    {
        $this->controller->addCss('/plugins/dimsog/slider/assets/swiper/swiper.min.css');
        $this->controller->addJs('/plugins/dimsog/slider/assets/swiper/swiper.min.js');
    }

    public function componentDetails()
    {
        return [
            'name'        => __('dimsog.slider::lang.components.slider.name'),
            'description' => __('dimsog.slider::lang.components.slider.description')
        ];
    }

    public function defineProperties()
    {
        return [
            'category' => [
                'title' => __('dimsog.slider::lang.components.slider.properties.category'),
                'type' => 'dropdown',
                'required' => true
            ],
            'width' => [
                'type' => 'string',
                'title' => __('dimsog.slider::lang.components.slider.properties.width'),
                'default' => '100%',
                'group' => __('dimsog.slider::lang.components.slider.properties.groups.dimensions')
            ],
            'height' => [
                'type' => 'string',
                'title' => __('dimsog.slider::lang.components.slider.properties.height'),
                'default' => '400px',
                'group' => __('dimsog.slider::lang.components.slider.properties.groups.dimensions')
            ]
        ];
    }

    public function getCategoryOptions()
    {
        return Category::lists('name', 'id');
    }
}
