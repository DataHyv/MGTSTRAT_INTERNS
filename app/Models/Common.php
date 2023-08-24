<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Common extends Model
{
    use HasFactory;

    public function insert_to_table($tableName = '', $insertArr = []) { // INSERT TO TABLE
        DB::table($tableName)
        ->insert($insertArr);

        return DB::getPdo()->lastInsertId();
    }

    public function select_to_table($tableName = '', $selectArr = [], $selectWhereArr = []) { // SELECT TO TABLE
        $isSelected = DB::table($tableName)
            ->select($selectArr)
            ->where($selectWhereArr)
            ->get();

        return $isSelected;
    }

    public function update_to_table($tableName = '', $updateArr = [], $updateWhereArr = []) { // UPDATE TO TABLE - TO CHECK
        $isUpdated = DB::table($tableName)
            ->where($updateWhereArr)
            ->update($updateArr);
        return $isUpdated;
    }

    public function delete_to_table($tableName = '', $deleteWhereArr = []) { // DELETE TO TABLE
        $isDeleted = DB::table($tableName)->where($deleteWhereArr)
            ->delete();
        return $isDeleted;
    }

    public function select_to_table_orderBy($tableName = '', $selectArr = [], $selectWhereArr = [], $columnName = '', $asc_desc = 'asc') { // SELECT TO TABLE
        $isSelected = DB::table($tableName)
            ->select($selectArr)
            ->where($selectWhereArr)
            ->orderBy($columnName, $asc_desc)
            ->get();

        return $isSelected;
    }

    public function setClientFirstLast_Engagement($clientId, $engForm, $engFormId) {

        $updateArr = [];

        $getFirstEngagement = DB::table('clients')
            ->select(['first_eng','first_eng_form','first_eng_form_id'])
            ->where('id',$clientId)
            ->get();

        if($getFirstEngagement) {
            if($getFirstEngagement[0]->first_eng == '' || 
              ($getFirstEngagement[0]->first_eng_form == $engForm && $getFirstEngagement[0]->first_eng_form_id == $engFormId)
            ) {
                $updateArr['first_eng'] = date("Y-m-d");
                $updateArr['first_eng_form'] = $engForm;
                $updateArr['first_eng_form_id'] = $engFormId;
            } else {
                $updateArr['latest_eng'] = date("Y-m-d");
                $updateArr['latest_eng_form'] = $engForm;
                $updateArr['latest_eng_form_id'] = $engFormId;
            }  
        }

        $isUpdated = DB::table('clients')
            ->where('id',$clientId)
            ->update($updateArr);

        return $isUpdated;

    }

}