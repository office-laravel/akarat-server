<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Package extends Model
{
    use HasFactory;
    protected $table = 'packages';

    protected $fillable = [
      'name',
'code',
'reals_counts',
'price',
'is_special',
'is_free',
'status',

    ];
    protected $hidden = ['expire_date'];

    public function packagesusers(): HasMany
    {
        return $this->hasMany(PackageUser::class, 'package_id');
    }
    public function durationspackages(): HasMany
    {
        return $this->hasMany(DurationPackage::class, 'package_id');
    }

    // public function getTypeConvAttribute()
    // {
    //     $conv = "";
    //     switch ($this->type) {
    //         case ('p'):
    //             $conv = 'منتج';
    //             break;
    //         case ('s'):
    //             $conv = 'خدمة';
    //             break;

    //         default:
    //             $conv = 'منتج';
    //     }
    //     return $conv;
    // }

}
