<?php

namespace App\Models\Backend;

use App\Traits\Model\Backend\ModelsExtendsTrait;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use ModelsExtendsTrait;
    /**
     * [$guarded description]
     *
     * @var string
     */
    protected static $order = 'sort';

    /**
     * [$guarded description]
     *
     * @var array
     */
    protected static $index = [
        'id',
        'name',
        'route',
        'icon',
        'parent_id',
        'tab_id'
    ];

    /**
     * [$guarded description]
     *
     * @var string
     */
    protected static $sort = 'desc';

    /**
     * [$guarded description]
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * [$guarded description]
     *
     * @var string
     */
    protected $table = "menus";
}
