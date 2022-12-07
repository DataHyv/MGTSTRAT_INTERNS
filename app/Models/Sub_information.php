<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_information extends Model
{
    use HasFactory;

    protected $fillable = [
        'customized_engagement_form_id',
        'batch_number',
        'session_number',
    ];

    public function customized_engagement_form()
    {
        return $this->belongsTo(Customized_engagement_form::class, 'customized_engagement_forms_id', 'id');
    }

    public function sub_fees()
    {
        return $this->hasMany(Sub_fee::class, 'sub_informations_id', 'id');
    }
}
