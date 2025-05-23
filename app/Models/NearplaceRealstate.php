<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NearplaceRealstate extends Model
{
    protected $table = 'nearplaces_realstates';
    protected $fillable = [
      'realstate_id',
'near_place_id',
'longitude',
'latitude',
'name',
 
    ];
}
