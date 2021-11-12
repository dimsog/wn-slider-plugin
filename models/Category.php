<?php

namespace Dimsog\Slider\Models;

use Model;
use Winter\Storm\Database\Traits\NestedTree;
use Winter\Storm\Database\Traits\Sortable;

/**
 * @property int $id
 * @property string|null $name
 * @property int $parent_id
 * @property int $position
 * @property int $active
 */
class Category extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use NestedTree;
    use Sortable;

    const SORT_ORDER = 'position';

    public $table = 'dimsog_slider_categories';

    protected $guarded = ['*'];

    public $rules = [];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public $belongsTo = [
        'parent' => [Category::class, 'order' => 'position']
    ];

    public function getParentIdOptions()
    {
        return static::lists('name', 'id');
    }


    public static function findActiveById(int $id): ?Category
    {
        return static::where('id', $id)
            ->where('active', 1)
            ->first();
    }
}
