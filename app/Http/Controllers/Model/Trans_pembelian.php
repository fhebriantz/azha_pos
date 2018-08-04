<?php

namespace App\Http\Controllers\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Trans_pembelian extends Model
{
    protected $table = 'az_trans_pembelian';

    public static function trans_beli(){
        
        $az_trans_pembelian = DB::table('az_trans_pembelian')
            ->join('az_mast_pelanggan', 'az_mast_pelanggan.id', '=', 'az_trans_pembelian.kode_pelanggan')
            ->join('az_mast_pegawai', 'az_mast_pegawai.id', '=', 'az_trans_pembelian.kode_pegawai')
            ->select('az_trans_pembelian.*','az_mast_pelanggan.nama_pelanggan','az_mast_pegawai.nama_pegawai')
            ->get();

    return $az_trans_pembelian;
    }

    public static function detail_beli($id){
        
        $az_detil_pembelian = DB::table('az_detil_pembelian')
            ->join('az_mast_barang', 'az_mast_barang.kode_barang', '=', 'az_detil_pembelian.kode_barang')
            ->select('az_detil_pembelian.*','az_mast_barang.nama_barang')
            ->where('id_trans','=',$id)
            ->get();

    return $az_detil_pembelian;
    }

    // public static function first_beli($id){
        
    //     $az_detil_pembelian = DB::table('az_detil_pembelian')
    //         ->select('az_detil_pembelian.*')
    //         ->where('id_trans','=',$id)
    //         ->first();

    // return $az_detil_pembelian;
    // }
}
