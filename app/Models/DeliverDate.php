<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class DeliverDate extends Model
{
    protected $table = 'deliver_dates';
    protected $fillable = [
       'name',
'val',
'sequence',
'status',

    ];

    protected $appends = ['status_conv'];
        public function getStatusConvAttribute()
    {
        $conv = "";
        switch ($this->status) {
            case ('1'):
                $conv = 'مفعل';
                break;
            case ('0'):
                $conv = 'غير مفعل';
                break;
                case (null):
                    $conv =  'غير مفعل';
                    break;
              
            default:
                $conv = '-';
        }
        return $conv;
    }
 public function realstates(): HasMany
   {
       return $this->hasMany(Realstate::class, 'projDeliverdates_id');
   }
}
