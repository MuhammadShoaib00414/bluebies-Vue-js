<?php

namespace App\Models;

use App\Models\Traits\Attributes\PageAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\PageRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    use SoftDeletes;

    /**
     * The guarded field which are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'heading',
        'localization',
        'images',
        'status',
        'created_by',
        'updated_by',
    ];

    /**
     * Casts.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
    ];
}
