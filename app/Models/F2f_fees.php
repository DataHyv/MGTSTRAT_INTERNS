<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class F2f_fees extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'f2f_id',
        'fee_type',
        'fee_noc',
        'fee_pd',
        'fee_nod',
        'fee_atd',
        'fee_nswh',
        'nswh_percent',
        'fee_notes',
    ];
}
