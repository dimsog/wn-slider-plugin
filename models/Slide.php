<?php

namespace Dimsog\Slider\Models;

use Model;
use System\Models\File;
use Winter\Storm\Database\Traits\Sortable;

/**
 * @property int $id
 * @property int $category_id
 * @property Category $category
 * @property File $image
 * @property string|null $name
 * @property string|null $sub_name
 * @property string|null $link
 * @property string|null $button_text
 * @property string|null $text
 * @property int $position
 * @property int $active
 */
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
