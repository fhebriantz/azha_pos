<?php

namespace App\Http\Controllers\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Master_pemesanan extends Model
{
    protected $table = 'az_detil_pemesanan';

    public static function detail_pesan($id){
        
        $az_detil_pemesanan = DB::table('az_detil_pemesanan')
            ->select('az_detil_pemesanan.*')
            ->where('id_trans','=',$id)
            ->get();

    return $az_detil_pemesanan;
    }
}
