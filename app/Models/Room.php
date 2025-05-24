<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = [
      'num',
'val',
'sequence',
'status',
 
    ];
    public function realstates(): HasMany
    {
        return $this->hasMany(Realstate::class, 'room_id');
    }
}
