<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    protected $table = 'residences';
    protected $fillable = [
       'name',
'val',
'icon',
'sequence',
'status',

    ];
}
