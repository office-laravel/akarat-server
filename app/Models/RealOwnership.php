<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RealOwnership extends Model
{
    protected $table = 'real_ownerships';
    protected $fillable = [
       'name',
'val',
'sequence',
'status',

    ];
}
