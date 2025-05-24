<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Feature extends Model
{
    protected $table = 'features';
    protected $fillable = [
      'name',
'icon',
'sequence',
'f_category_id',
 
    ];
    public function featurecategory(): BelongsTo
    {
        return $this->belongsTo(FeatureCategory::class, 'f_category_id')->withDefault();
    }
    public function featurerealstates(): HasMany
    {
        return $this->hasMany(FeatureRealstate::class, 'feature_id');
    }

}
