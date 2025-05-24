<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Residence extends Model
{
    protected $table = 'residences';
    protected $fillable = [
       
       'name',
'val',
'icon',
'sequence',
'status',

    ];
    public function realstates(): HasMany
    {
        return $this->hasMany(Realstate::class, 'residence_id');
    }
}
