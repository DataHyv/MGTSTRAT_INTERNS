<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class WebinarFee extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'client_id',
        'webinar_id',
        'type',
        'package_fees',
        'num_sessions',
        'nswh',
        'notes'

    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
