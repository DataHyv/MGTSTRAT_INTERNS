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
}