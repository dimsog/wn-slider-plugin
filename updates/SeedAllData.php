<?php

namespace Dimsog\Slider\Updates;

use Dimsog\Slider\Models\Category;
use Dimsog\Slider\Models\Slide;
use System\Models\File;
use Winter\Storm\Database\Updates\Seeder;

class SeedAllData extends Seeder
{
    public function run()
    {
        $category = new Category();
        $category->name = 'Default category';
        $category->save();

        $fileModel = new File();
        $fileModel->fromFile(__DIR__ . '/../assets/images/slide1.jpg');
        $model = new Slide();
        $model->image = $fileModel;
        $model->category_id = $category->id;
        $model->name = 'Slide 1';
        $model->sub_name = 'Swiper slider for WinterCMS';
        $model->text = '<p>Create slides in your website using swiper plugin!</p>';
        $model->button_text = 'Github';
        $model->link = 'https://github.com/dimsog/wn-slider-plugin';
        $model->save();

        $fileModel = new File();
        $fileModel->fromFile(__DIR__ . '/../assets/images/slide2.jpg');
        $model = new Slide();
        $model->image = $fileModel;
        $model->category_id = $category->id;
        $model->name = 'Slide 2';
        $model->sub_name = 'Swiper slider for WinterCMS';
        $model->text = '<p>Create slides in your website using swiper plugin!</p>';
        $model->button_text = 'Github';
        $model->link = 'https://github.com/dimsog/wn-slider-plugin';
        $model->save();
    }
}
