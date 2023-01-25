<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_fee extends Model
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
        'nswh_percent',
        'notes',
    ];

    // public function client()
    // {
    //     return $this->belongsTo(Client::class);
    // }

    public function sub_informations()
    {
        return $this->belongsTo(Sub_information::class);
    }
}
