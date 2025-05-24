<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Mediastor extends Model
{
    protected $table = 'mediastors';
    protected $fillable = [
       'caption',
'image',
'folder',
'type',
'sequence',
'realstate_id',
'is_feature',

    ];
    public function realstate(): BelongsTo
    {
        return $this->belongsTo(Realstate::class, 'realstate_id')->withDefault();
    } 
}
