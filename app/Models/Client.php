<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'cstmzd_eng_form_id',
    ];

    public function customized_engagement_forms()
    {
        return $this->hasMany(Customized_engagement_form::class, 'client_id');
    	// return $this->hasMany('App\Models\Customized_engagement_form');
        // return $this->belongsTo('App\Models\Customized_engagement_form');
    }
}
