<?php

namespace Dimsog\Slider\Models;

use Model;
use System\Models\File;
use Winter\Storm\Database\Traits\Sortable;

class Slide extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use Sortable;

    const SORT_ORDER = 'position';

    public $table = 'dimsog_slider_slides';

    protected $guarded = ['*'];

    public $rules = [];

    public $attachOne = [
        'image' => [File::class, 'delete' => true]
    ];

    public $belongsTo = [
        'category' => [Category::class, 'order' => 'position'],
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
