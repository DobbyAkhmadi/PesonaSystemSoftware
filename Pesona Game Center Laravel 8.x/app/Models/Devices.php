<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    use HasFactory;
    protected $fillable = [
        'devicename',
        'type',
        'serialnumber',
        'warranty',
        'statusdevice',
        'updated_at',
        'created_at'
    ];
}
