<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultantfee extends Model
{
    use HasFactory;
    protected $table = 'consultantfees';
    protected $fillable = [
        'first_name',
        'last_name',
        'lead_faci',
        'co_lead',
        'co_lead_f2f',
        'co_faci',
        'lead_consultant',
        'consulting',
        'designer',
        'moderator',
        'producer',
    ];
}
