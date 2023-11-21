<?php

namespace App\Models;

use App\Models\Traits\Attributes\FaqAttributes;
use App\Models\Traits\ModelAttributes;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Packages extends Model
{
    use  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'price', 'localization'];

    public function features()
    {
        return $this->belongsToMany(Features::class, 'package_features', 'package_id', 'feature_id');
    }
}
