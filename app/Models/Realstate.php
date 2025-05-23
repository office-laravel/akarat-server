<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Realstate extends Model
{
    protected $table = 'realstates';
    protected $fillable = [
       'package_user_id',
'dep',
'purpose',
'saleType',
'rentDuration',
'type',
'residence',
'residence_id',
'trade',
'trade_id',
'rooms',
'room_id',
'baths',
'bath_id',
'price',
'prePay',
'area',
'projDeliverdate',
'projDeliverdates_id',
'projDeliverplan',
'projProceedPercent',
'projProceedPercent_id',
'projType',
'projResidence',
'projResidence_id',
'projTrade',
'projTrade_id',
'latitude',
'longitude',
'user_id',
'city_id',
'subcity_id',
'district_id',
'furnishStatus',
'description',
'report_number',
'realstate_code',
'is_special',
'status',
'slug',
'keywords',
'RealOwnership',
'RealOwnership_id',
'id',
'name',
'val',
'icon',
'sequence',
'status',

    ];
}
