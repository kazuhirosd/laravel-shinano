<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RmsSystem extends Model
{
    use HasFactory;

    protected $table = 'rms_systems';
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = [
        'service_secret',
        'license_key',
    ];

}
