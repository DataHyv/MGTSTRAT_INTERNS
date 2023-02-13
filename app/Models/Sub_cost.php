<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_cost extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'sub_informations_id',
        'type',
        'consultant_num',
        'hour_fee',
        'hour_num',
        'nswh',
        'rooster',
        'notes',
    ];

    public function sub_informations()
    {
        return $this->belongsTo(Sub_information::class);
    }
}
