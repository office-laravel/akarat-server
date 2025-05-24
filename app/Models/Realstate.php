<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
 

    ];

    
    public function featurerealstates(): HasMany
    {
        return $this->hasMany(FeatureRealstate::class, 'realstate_id');
    }
    public function mediastors(): HasMany
    {
        return $this->hasMany(Mediastor::class, 'realstate_id');
    }
    public function packageuser(): BelongsTo
    {
        return $this->belongsTo(PackageUser::class, 'package_user_id');
    }
    public function residence(): BelongsTo
    {
        return $this->belongsTo(Residence::class, 'residence_id');
    }
    public function trade(): BelongsTo
    {
        return $this->belongsTo(Trade::class, 'trade_id');
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
    public function bath(): BelongsTo
    {
        return $this->belongsTo(Bath::class, 'bath_id');
    }
    public function deliverdate(): BelongsTo
    {
        return $this->belongsTo(DeliverDate::class, 'projDeliverdates_id');
    }

    public function proceedpercent(): BelongsTo
    {
        return $this->belongsTo(ProceedPercent::class, 'projProceedPercent_id');
    }

    public function projresidence(): BelongsTo
    {
        return $this->belongsTo(Residence::class, 'projResidence_id');
    }

    public function projtrade(): BelongsTo
    {
        return $this->belongsTo(Trade::class, 'projTrade_id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
    }
    public function subcity(): BelongsTo
    {
        return $this->belongsTo(Subcity::class, 'subcity_id');
    }
    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class, 'district_id');
    }
    public function realownership(): BelongsTo
    {
        return $this->belongsTo(RealOwnership::class, 'RealOwnership_id');
    }
  
    


}
