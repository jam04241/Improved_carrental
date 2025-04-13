<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'user_id',
        'province',
        'city',
        'barangay',
        'address',
        'phone_number',
        'driver_license_number',
        'license_expiration_date',
        'license_img_path',
        'is_banned',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //
}