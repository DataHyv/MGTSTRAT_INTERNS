<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Workshop_cost extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'client_id',
        'workshop_id',
        'type',
        'hour_fee',
        'hour_num',
        'nswh',
        'rooster'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}