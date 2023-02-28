<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class F2f_information extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'status',
        'program_dates',
        'program_start_time',
        'program_end_time',
        'cluster',
        'core_area',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
