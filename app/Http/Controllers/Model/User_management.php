<?php

namespace App\Http\Controllers\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class User_management extends Model
{
    protected $table = 'az_user_management';

    public static function getTableUser(){
    	
        $az_user_management = DB::table('az_user_management')
            ->join('az_user_group', 'az_user_group.id', '=', 'az_user_management.id_user_group')
            ->join('az_mast_outlet', 'az_mast_outlet.id', '=', 'az_user_management.id_outlet')
            ->select('az_user_management.*', 'az_user_group.usergroup', 'az_mast_outlet.nama_outlet')
            ->get(); 
     return $az_user_management;
    }
}
