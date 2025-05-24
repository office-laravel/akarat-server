<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class RealOwnership extends Model
{
    protected $table = 'real_ownerships';
    protected $fillable = [
       'name',
'val',
'sequence',
'status',

    ];
    public function realstates(): HasMany
    {
        return $this->hasMany(Realstate::class, 'RealOwnership_id');
    }
}
