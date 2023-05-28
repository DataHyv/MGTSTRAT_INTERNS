<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coaching extends Model
{
    use HasFactory;
    protected $table = 'coachings';
    protected $fillable = [
        'status',
        'client',
        'engagement_title',
        'engagement_type',
        'number_of_pax',
        'date',
        'time',
        'cd_num_of_coaches',
        'cd_daily_fees',
        'cd_num_of_sessions',
        'cd_nswh',
        'cd_notes',
        'ec_num_of_coaches',
        'ec_daily_fees',
        'ec_num_of_sessions',
        'ec_nswh',
        'ec_notes',
        'pdc_num_of_coaches',
        'pdc_daily_fees',
        'pdc_num_of_sessions',
        'pdc_nswh',
        'pdc_notes',
        'gsc_num_of_coaches',
        'gsc_daily_fees',
        'gsc_num_of_sessions',
        'gsc_nswh',
        'gsc_notes',
        'waltc_num_of_coaches',
        'waltc_daily_fees',
        'waltc_num_of_sessions',
        'waltc_nswh',
        'dg_percentage',
        'dg_notes',
        'engagement_fees_total',
        's_session_fees',
        's_roster',
        'r_session_fees',
        'r_roster',
        'em_session_fees',
        'em_roster',
        'subtotal_roster',
        'engagement_cost_total',
        'total_package_roster',
        'pf_lcto',
    ];
}
