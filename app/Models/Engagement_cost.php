<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engagement_cost extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'client_id',
        'cstmzd_eng_form_id',
        'type',
        'consultant_num',
        'hour_fee',
        'hour_num',
        'nswh',
        'rooster',
        'notes',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
