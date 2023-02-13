<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customized_engagement_form extends Model
{
    use HasFactory;
    // protected $table = 'customized_engagement_forms';
    // protected $fillable = ['client'];
    protected $primaryKey = 'id';
    protected $fillable = [
        'status',
        'program_dates',
        'program_start_time',
        'program_end_time',
        'cluster',
        'core_area',
    ];
    // protected $casts = [
    //     'program_dates' => 'array',
    //     'program_start_time' => 'array',
    //     'program_end_time' => 'array',
    //     'cluster' => 'array',
    //     'core_area' => 'array',
    // ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    	// return $this->belongsTo('App\Models\Client', 'clients_id','id');
        // return $this->hasMany('App\Models\Client');
    }

    public function customized_engagement_forms()
    {
        return $this->hasMany(Sub_information::class, 'customized_engagement_forms_id');
    	// return $this->hasMany('App\Models\Customized_engagement_form');
        // return $this->belongsTo('App\Models\Customized_engagement_form');
    }
}
