<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assesment extends Model
{
    use HasFactory;
    protected $fillable = [
        'risk_scenerio',
        'threat',
        'threat_prob',
        'vulnerability',
        'vulnerability_crit',
        'cia',
        'access',
        'actors',
        'motive',
        'likelihood',
        'risk_val'
    ];
}
