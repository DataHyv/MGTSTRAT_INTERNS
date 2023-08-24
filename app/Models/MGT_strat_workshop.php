<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class MGT_strat_workshop extends Model
{
    use HasFactory;

    public function get_workshopList() {

        $workshop_list = DB::table('workshop_engagement_forms_tbl as a')
        ->join('clients as b', 'a.client_id', '=', 'b.id')
        ->select('a.*', 'a.intelligence as core_area', 'b.company_name')
        ->where('a.active',1)
        ->get();

        return $workshop_list;
    }

    public function get_cluster_intelligence($titleName) {
        $cluster_intelligence = DB::table('workshop_title_list as a')
        ->join('mgt_cluster_intelligence_binding as b', 'a.id', '=', 'b.title_id')
        ->leftJoin('mgt_cluster_list as c', 'b.cluster_id', '=', 'c.id')
        ->leftJoin('mgt_intelligence_list as d', 'b.intelligence_id', '=', 'd.id')
        ->select('a.title', 'c.name as cluster_name', 'd.name as intelligence_name')
        ->where('a.active',1)
        ->where('b.moduleName','MGTSTRAT-U Workshops') 
        ->where('a.title',$titleName)
        ->get();

        return $cluster_intelligence;
    }

}   