<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NearPlace extends Model
{
    protected $table = 'near_places';
    protected $fillable = [
       'icon',
'name',
'sequence',
'status',

    ];
}
