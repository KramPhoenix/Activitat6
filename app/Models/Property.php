<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $fillable = [
        'title', 'img', 'price', 'description', 'owner'
    ];


}
