<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mediastor extends Model
{
    protected $table = 'mediastors';
    protected $fillable = [
       'caption',
'image',
'folder',
'type',
'sequence',
'realstate_id',
'is_feature',

    ];
}
