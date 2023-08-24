<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class FTF_Engagement_model extends Model
{
    use HasFactory;

    public function get_ftfList() {

        $ftf_list = DB::table('ftf_engagement_forms_tbl as a')
        ->join('clients as b', 'a.client_id', '=', 'b.id')
        ->select('a.*', 'b.company_name')
        ->where('a.active',1)
        ->get();

        return $ftf_list;
    }

}
