<?php

namespace Dimsog\Slider\Models;

use Model;

class Slide extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    public $table = 'dimsog_slider_slides';

    protected $guarded = ['*'];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
