<?php

namespace Dimsog\Slider\Models;

use Illuminate\Database\Eloquent\Collection;
use Model;
use System\Models\File;
use Winter\Storm\Database\Traits\Sortable;

/**
 * @property int $id
 * @property int $category_id
 * @property Category $category
 * @property File $image
 * @property File $mobileImage
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
        'image' => [File::class, 'delete' => true],
        'mobile_image' => [File::class, 'delete' => true]
    ];

    public $belongsTo = [
        'category' => [Category::class, 'order' => 'position'],
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];


    public static function findAllByCategoryId(int $categoryId): Collection
    {
        return static::where('category_id', $categoryId)
            ->where('active', 1)
            ->orderBy('position')
            ->get();
    }
}
