<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class NearPlace extends Model
{
    protected $table = 'near_places';
    protected $fillable = [
        'icon',
        'name',
        'sequence',
        'status',
    ];
    public function nearplacesrealstates(): HasMany
    {
        return $this->hasMany(NearPlace::class, 'near_place_id');
    }

}
