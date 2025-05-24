<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class FeatureRealstate extends Model
{
    protected $table = 'features_realstates';
    protected $fillable = [
        'realstate_id',
        'feature_id',
        'f_category_id',

    ];

    public function realstate(): BelongsTo
    {
        return $this->belongsTo(Realstate::class, 'realstate_id')->withDefault();
    } 
    public function feature(): BelongsTo
    {
        return $this->belongsTo(Feature::class, 'feature_id')->withDefault();
    } 
    public function featurecategory(): BelongsTo
    {
        return $this->belongsTo(FeatureCategory::class, 'f_category_id')->withDefault();
    }
}
