<?php

namespace App\Http\Controllers\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Master_penjualan extends Model
{
    protected $table = 'az_detil_penjualan';

    public static function detail_jual($id){
        
        $az_detil_penjualan = DB::table('az_detil_penjualan')
            ->select('az_detil_penjualan.*')
            ->where('id_trans','=',$id)
            ->get();

    return $az_detil_penjualan;
    }
}
