<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $fillable = [
        'add_org',
        'indrustry_type',
        'asset_name',
        'type',
        'description',
        'value',
        'asset_owner'
    ];
}
