<?php

namespace Dimsog\Slider\Models;

use Model;

/**
 * Slide Model
 */
class Slide extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    public $table = 'dimsog_slider_slides';

    protected $guarded = ['*'];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
