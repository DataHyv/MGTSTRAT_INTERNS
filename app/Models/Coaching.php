<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Coaching extends Model
{
    use HasFactory;

    public function get_coachingList() {

        $coaching_list = DB::table('coaching_engagement_forms_tbl as a')
        ->join('clients as b', 'a.client_id', '=', 'b.id')
        ->select('a.*', 'a.intelligence as core_area', 'b.company_name')
        ->where('a.active',1)
        ->get();

        return $coaching_list;
    }
}
