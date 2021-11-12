<?php

namespace Dimsog\Slider\Components;

use Cms\Classes\ComponentBase;
use Dimsog\Slider\Models\Category;

class Slider extends ComponentBase
{
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
            ]
        ];
    }

    public function getCategoryOptions()
    {
        return Category::lists('name', 'id');
    }
}
