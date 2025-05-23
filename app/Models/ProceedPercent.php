<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProceedPercent extends Model
{
    protected $table = 'proceed_percents';
    protected $fillable = [
       'name',
'val',
'sequence',
'status',

    ];
}
