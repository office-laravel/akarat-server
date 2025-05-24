<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
 
 
class Trade extends Model
{
    protected $table = 'trades';
    protected $fillable = [
       'name',
'val',
'icon',
'sequence',
'status',

    ];
    public function realstates(): HasMany
    {
        return $this->hasMany(Realstate::class, 'trade_id');
    }
    public function projrealstates(): HasMany
    {
        return $this->hasMany(Realstate::class, 'projTrade_id');
    }
    
}
