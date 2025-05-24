<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Subcity extends Model
{
    use HasFactory;

    protected $table = 'subcities';
    protected $fillable = [
        'city_id',
        'subname',
        'href',
        'latitude',
        'longitude',
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
    }
    public function districts(): HasMany
    {
        return $this->hasMany(District::class, 'subcity_id');
    }
   
   public function realstates(): HasMany
    {
        return $this->hasMany(Realstate::class, 'subcity_id');
    }
}
