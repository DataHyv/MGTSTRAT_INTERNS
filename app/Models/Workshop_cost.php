<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Workshop_cost extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'workshop_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}