<?php

namespace Dimsog\Slider\Models;

use Model;

class Category extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    public $table = 'dimsog_slider_categories';

    protected $guarded = ['*'];
}
