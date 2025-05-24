<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Bath extends Model
{
    protected $table = 'baths';
 protected $fillable = [
    'num',
'val',
'sequence',
'status',

 ];  

 public function realstates(): HasMany
   {
       return $this->hasMany(Realstate::class, 'bath_id');
   }
}
