<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [

        'title',
        'description',
        'categories_id',
        'status',
        'image',

    ];


}
