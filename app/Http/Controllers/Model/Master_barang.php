<?php

namespace App\Http\Controllers\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Master_barang extends Model
{
    protected $table = 'az_mast_barang';

    public static function all_barang(){
        
        $az_mast_barang = DB::table('az_mast_barang')
            ->join('az_mast_kategori', 'az_mast_kategori.id', '=', 'az_mast_barang.kode_kategori')
            ->select('az_mast_barang.*','az_mast_kategori.nama_kategori')
            ->where('az_mast_barang.is_active','!=',0)
            ->get();

    return $az_mast_barang;
    }

    public static function barang_detail(){
        
        $az_mast_barang = DB::table('az_mast_barang')
            ->join('az_mast_kategori', 'az_mast_kategori.id', '=', 'az_mast_barang.kode_kategori')
            ->select('az_mast_barang.*','az_mast_kategori.nama_kategori')
            ->get();

    return $az_mast_barang;
    }
}
