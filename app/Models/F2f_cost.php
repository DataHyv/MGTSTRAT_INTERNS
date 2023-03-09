<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class F2f_cost extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'f2f_id',
        'cost_type',
        'cost_noc',
        'cost_pd',
        'cost_nod',
        'cost_atd',
        'cost_nswh',
        'cost_roster',
    ];
}
