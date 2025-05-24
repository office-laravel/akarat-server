<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class ProceedPercent extends Model
{
    protected $table = 'proceed_percents';
    protected $fillable = [
       'name',
'val',
'sequence',
'status',

    ];
     public function realstates(): HasMany
   {
       return $this->hasMany(Realstate::class, 'projProceedPercent_id');
   }
    
}
