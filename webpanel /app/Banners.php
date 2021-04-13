<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'url',
        'video',
        'position',
        'status'
    ];
}
