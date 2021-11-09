<?php

namespace Dimsog\Slider\Models;

use Model;
use Winter\Storm\Database\Traits\Sortable;

class Slide extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use Sortable;

    const SORT_ORDER = 'position';

    public $table = 'dimsog_slider_slides';

    protected $guarded = ['*'];

    public $rules = [];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
