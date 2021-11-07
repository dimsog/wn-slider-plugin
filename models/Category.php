<?php

namespace Dimsog\Slider\Models;

use Model;
use Winter\Storm\Database\Traits\SimpleTree;
use Winter\Storm\Database\Traits\Sortable;

class Category extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use SimpleTree;
    use Sortable;

    const SORT_ORDER = 'position';

    public $table = 'dimsog_slider_categories';

    protected $guarded = ['*'];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
