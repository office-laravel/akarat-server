<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function realstate(): BelongsTo
    {
        return $this->belongsTo(Realstate::class, 'realstate_id')->withDefault();
    } 
    public function nearplaces(): BelongsTo
    {
        return $this->belongsTo(NearPlace::class, 'near_place_id')->withDefault();
    } 
}
