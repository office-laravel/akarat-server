<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliverDate extends Model
{
    protected $table = 'deliver_dates';
    protected $fillable = [
       'name',
'val',
'sequence',
'status',

    ];
}
