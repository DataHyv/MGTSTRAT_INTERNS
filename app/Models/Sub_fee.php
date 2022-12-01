<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_fee extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'client_id',
        'cstmzd_eng_form_id',
        'batch_number',
        'session_number',
        'type',
        'consultant_num',
        'hour_fee',
        'hour_num',
        'nswh',
        'nswh_percent',
        'notes',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
