<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class District extends Model
{
    protected $table = 'districts';
    protected $fillable = [
       'name',
'subcity_id',
'latitude',
'longitude',
'code',
'sequence',
'status',
'city_id',

    ];


    public function subcity(): BelongsTo
    {
        return $this->belongsTo(Subcity::class, 'subcity_id')->withDefault();
    }
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id')->withDefault();
    }
    public function realstates(): HasMany
    {
        return $this->hasMany(Realstate::class, 'district_id');
    }
}
