<?php

namespace Dimsog\Slider\Components;

use Cms\Classes\ComponentBase;

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
        return [];
    }
}
