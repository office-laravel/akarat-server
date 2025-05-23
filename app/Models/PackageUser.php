<?php

namespace App\Models;

//use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class PackageUser extends Model
{
    use HasFactory;

    protected $table = 'packages_users';

    protected $fillable = [
       'user_id',
'package_id',
'total_reals_count',
'used_reals_count',
'remain_reals_count',
'name',
'code',
'price',
'is_special',
'is_free',
'duration',
'expire_date',
'start_date',
'duration_id',

    ];
    protected $appends = ['status_conv'];
        public function getStatusConvAttribute()
    {
        $conv = "";
        switch ($this->status) {
            case ('w'):
                $conv = 'انتظار';
                break;
            case ('a'):
                $conv = 'موافق';
                break;
                case ('r'):
                    $conv = 'مرفوص';
                    break;
            default:
                $conv = '-';
        }
        return $conv;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
    public function packagesusers(): HasMany
    {
        return $this->hasMany(Sites::class, 'package_user_id');
    }

    public function duration(): BelongsTo
    {
        return $this->belongsTo(Duration::class, 'duration_id');
    }
}
