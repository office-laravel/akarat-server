<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeatureRealstate extends Model
{
    protected $table = 'features_realstates';
    protected $fillable = [
       'realstate_id',
'feature_id',
'f_category_id',

    ];
}
