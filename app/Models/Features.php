<?php

namespace App\Models;

use App\Models\Traits\Attributes\FaqAttributes;
use App\Models\Traits\ModelAttributes;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Features extends Model
{
    use  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'localization','selectedpackage'];

    public function packages()
    {
        return $this->belongsToMany(Packages::class, 'package_features', 'feature_id', 'package_id');
    }
    
}
