<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class FeatureCategory extends Model
{
    protected $table = 'features_categories';
    protected $fillable = [
       'name',
'icon',
'sequence',
'status',

    ];
    public function features(): HasMany
    {
        return $this->hasMany(Feature::class, 'f_category_id');
    }
    public function featurerealstates(): HasMany
    {
        return $this->hasMany(FeatureRealstate::class, 'f_category_id');
    }
}
