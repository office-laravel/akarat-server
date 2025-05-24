<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class City extends Model
{
    use HasFactory;

    protected $table = 'cities';
    protected $fillable = [
        'country_id',
        'name',
        'href',
        'latitude',
        'longitude'
    ];

    public function country()
    {
        return $this->belongsTo(Countries::class, 'country_id');
    }
    public function subcities()
    {
        return $this->hasMany(Subcity::class, 'city_id');
    }
    public function districts()
    {
        return $this->hasMany(District::class, 'city_id');
    }

  
    public function realstates(): HasMany
    {
        return $this->hasMany(Realstate::class, 'city_id');
    }
}
