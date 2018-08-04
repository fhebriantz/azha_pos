<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\Master_barang;
use App\Http\Controllers\Model\Master_kategori;

use Auth;

class Master_barangController extends Controller
{

    public function list_barang()
    {
        $az_mast_barang = Master_barang::all_barang();
        return view('pages/cms/Master_barang/Master_barang', compact('az_mast_barang'));
    }

    public function tambah_barang()
    {
        $result = Master_barang::all_barang()->last();
        if (sizeof($result) > 0){

            $id_extend = ($result->id_barang)+1;

        }
        else
        {
            $id_extend = 1;
        } 

        $az_mast_kategori = Master_kategori::all_kategori();
        return  view('pages/cms/Master_barang/Master_barang_input', compact('az_mast_kategori','id_extend'));
    }

    public function edit_barang($id)
    {
        $az_mast_barang = Master_barang::barang_detail()->where('id','=',$id)->first();
        $az_mast_kategori = Master_kategori::all_kategori();
        return  view('pages/cms/Master_barang/Master_barang_edit', compact('az_mast_barang','az_mast_kategori'));
    }


    // menampilkan fungsi input
    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'nama_barang' => 'required',
                'kode_barang' => 'required',
                'deskripsi' => 'required',
                'stok_barang' => 'required',
                'berat_barang' => 'required',
                'harga_barang' => 'required',
                'karat' => 'required',
                'dibuat' => 'required',
                'kode_kategori' => 'required',
            ]);

        $az_mast_barang = new Master_barang;

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $az_mast_barang->nama_barang = $request->nama_barang; 
            $az_mast_barang->deskripsi = $request->deskripsi; 
            $az_mast_barang->stok_barang = $request->stok_barang; 
            $az_mast_barang->berat_barang = $request->berat_barang; 
            $az_mast_barang->harga_barang = $request->harga_barang; 
            $az_mast_barang->karat = $request->karat; 
            $az_mast_barang->dibuat = $request->dibuat; 
            $az_mast_barang->kode_kategori = $request->kode_kategori; 
            $az_mast_barang->id_barang = $request->kode_barang; 

            $init_kategori = Master_kategori::where('id','=',$request->kode_kategori)->first();
            $initial = $init_kategori->initial;

            $az_mast_barang->kode_barang = $initial.($request->kode_barang); 

        // untuk mengsave
        $az_mast_barang->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/barang');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'nama_barang' => 'required',
                'kode_barang' => 'required',
                'deskripsi' => 'required',
                'stok_barang' => 'required',
                'berat_barang' => 'required',
                'harga_barang' => 'required',
                'karat' => 'required',
                'dibuat' => 'required',
                'kode_kategori' => 'required',
               
            ]);
        
        $az_mast_barang = Master_barang::where('id','=',$id)->first();

            $az_mast_barang->nama_barang = $request->nama_barang; 
            $az_mast_barang->deskripsi = $request->deskripsi; 
            $az_mast_barang->stok_barang = $request->stok_barang; 
            $az_mast_barang->berat_barang = $request->berat_barang; 
            $az_mast_barang->harga_barang = $request->harga_barang; 
            $az_mast_barang->karat = $request->karat; 
            $az_mast_barang->dibuat = $request->dibuat; 

       

        $az_mast_barang->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/barang');
    }

    public function delete($id){
        // find khusus untuk primary key di database
        $az_mast_barang = Master_barang::where('id','=',$id)->first();
        $az_mast_barang->is_active = 0;
        $az_mast_barang->save();

        // sama aja kaya href setelak klik delete
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/barang');
    } 
}