<?php

namespace Dimsog\Slider\Components;

use Cms\Classes\ComponentBase;
use Dimsog\Slider\Models\Category;
use Dimsog\Slider\Models\Slide;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Request;

class Slider extends ComponentBase
{
    /**
     * @var Collection
     */
    private $items;

    /**
     * @var Category|null
     */
    private $category = null;


    public function onRun()
    {
        if ($this->property('injectScripts')) {
            $this->controller->addCss('/plugins/dimsog/slider/assets/swiper/swiper.min.css', 'Dimsog.Slider');
            $this->controller->addCss('/plugins/dimsog/slider/assets/style.css', 'Dimsog.Slider');
            $this->controller->addJs('/plugins/dimsog/slider/assets/swiper/swiper.min.js', 'Dimsog.Slider');
            $this->controller->addJs('/plugins/dimsog/slider/assets/script.js', 'Dimsog.Slider');
        }

        $this->category = Category::findActiveById((int) $this->property('category'));
        if (empty($this->category)) {
            $this->items = new Collection();
        } else {
            $this->items = Slide::findAllByCategoryId($this->category->id);
        }
    }

    public function onRender()
    {
        $properties = $this->properties;
        $properties['width'] = $this->getSliderWidth();
        $properties['height'] = $this->getSliderHeight();
        $this->page['category'] = $this->category;
        $this->page['items'] = $this->items;
        $this->page['isMobile'] = $this->isMobile();
        $this->page['properties'] = $properties;
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
            'injectScripts' => [
                'title' => __('dimsog.slider::lang.components.slider.properties.injectScripts'),
                'type' => 'checkbox',
                'default' => true
            ],
            'placement' => [
                'title' => __('dimsog.slider::lang.components.slider.properties.placement'),
                'type' => 'dropdown',
                'default' => 'center-center',
                'options' => [
                    'top-left' => __('dimsog.slider::lang.components.slider.properties.placement_options.top-left'),
                    'top-center' => __('dimsog.slider::lang.components.slider.properties.placement_options.top-center'),
                    'top-right' => __('dimsog.slider::lang.components.slider.properties.placement_options.top-right'),
                    'center-left' => __('dimsog.slider::lang.components.slider.properties.placement_options.center-left'),
                    'center-center' => __('dimsog.slider::lang.components.slider.properties.placement_options.center-center'),
                    'center-right' => __('dimsog.slider::lang.components.slider.properties.placement_options.center-right'),
                    'bottom-left' => __('dimsog.slider::lang.components.slider.properties.placement_options.bottom-left'),
                    'bottom-center' => __('dimsog.slider::lang.components.slider.properties.placement_options.bottom-center'),
                    'bottom-right' => __('dimsog.slider::lang.components.slider.properties.placement_options.bottom-right')
                ]
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
                'default' => '650px',
                'group' => __('dimsog.slider::lang.components.slider.properties.groups.dimensions')
            ],
            'mobile_width' => [
                'type' => 'string',
                'title' => __('dimsog.slider::lang.components.slider.properties.width'),
                'default' => '100%',
                'group' => __('dimsog.slider::lang.components.slider.properties.groups.mobile_dimensions')
            ],
            'mobile_height' => [
                'type' => 'string',
                'title' => __('dimsog.slider::lang.components.slider.properties.height'),
                'default' => '400px',
                'group' => __('dimsog.slider::lang.components.slider.properties.groups.mobile_dimensions')
            ],
            'name_color' => [
                'title' => __('dimsog.slider::lang.components.slider.properties.name_color'),
                'type' => 'string',
                'default' => '#FFF',
                'group' => __('dimsog.slider::lang.components.slider.properties.groups.colors')
            ],
            'sub_name_color' => [
                'title' => __('dimsog.slider::lang.components.slider.properties.sub_name_color'),
                'type' => 'string',
                'default' => '#FFF',
                'group' => __('dimsog.slider::lang.components.slider.properties.groups.colors')
            ],
            'text_color' => [
                'title' => __('dimsog.slider::lang.components.slider.properties.text_color'),
                'type' => 'string',
                'default' => '#FFF',
                'group' => __('dimsog.slider::lang.components.slider.properties.groups.colors')
            ],
            'pagination' => [
                'title' => __('dimsog.slider::lang.components.slider.properties.pagination'),
                'type' => 'checkbox',
                'default' => true,
                'group' => __('dimsog.slider::lang.components.slider.properties.groups.swiper')
            ],
            'navigation' => [
                'title' => __('dimsog.slider::lang.components.slider.properties.navigation'),
                'type' => 'checkbox',
                'default' => true,
                'group' => __('dimsog.slider::lang.components.slider.properties.groups.swiper')
            ],
            'loop' => [
                'title' => __('dimsog.slider::lang.components.slider.properties.loop'),
                'type' => 'checkbox',
                'default' => true,
                'group' => __('dimsog.slider::lang.components.slider.properties.groups.swiper')
            ]
        ];
    }

    public function getCategoryOptions()
    {
        return Category::lists('name', 'id');
    }

    private function isMobile(): bool
    {
        return mb_stripos(Request::userAgent(), 'Mobile', 0, 'UTF-8') !== false;
    }

    private function getSliderWidth(): ?string
    {
        if ($this->isMobile()) {
            return $this->property('mobile_width');
        }
        return $this->property('width');
    }

    public function getSliderHeight(): ?string
    {
        if ($this->isMobile()) {
            return $this->property('mobile_height');
        }
        return $this->property('height');
    }
}
