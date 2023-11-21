<?php

namespace App\Models;

use App\Models\Traits\Attributes\FaqAttributes;
use App\Models\Traits\ModelAttributes;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PartnersRequest extends Model
{
    use  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'heading', 'localization','images','deleted_at'];
}
