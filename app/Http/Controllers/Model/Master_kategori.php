<?php

namespace App\Http\Controllers\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Master_kategori extends Model
{
    protected $table = 'az_mast_kategori';

    public static function all_kategori(){
        
        $az_mast_kategori = DB::table('az_mast_kategori')
            ->select('az_mast_kategori.*')
            ->where('is_active','!=',0)
            ->get();

    return $az_mast_kategori;
    }
}
