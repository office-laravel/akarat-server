<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $fillable = [
       'name',
'subcity_id',
'latitude',
'longitude',
'code',
'sequence',
'status',

    ];
}
