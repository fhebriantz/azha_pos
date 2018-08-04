<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\Master_kategori;
use Illuminate\Support\Facades\Redirect;
use Session;

class Master_kategoriController extends Controller
{
    public function list_kategori()
    {
        $az_mast_kategori = Master_kategori::all_kategori();
        return view('pages/cms/Master_kategori/Master_kategori', compact('az_mast_kategori'));
    }

    public function tambah_kategori()
    {
        return  view('pages/cms/Master_kategori/Master_kategori_input');
    }

    public function edit_kategori($id)
    {
        $az_mast_kategori = Master_kategori::where('id','=',$id)->first();
        return  view('pages/cms/Master_kategori/Master_kategori_edit', compact('az_mast_kategori'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'nama_kategori' => 'required',
                'deskripsi' => 'required',
                'initial' => 'required',
            ]);

        $az_mast_kategori = new Master_kategori;

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $az_mast_kategori->nama_kategori = strtoupper($request->nama_kategori); 
            $az_mast_kategori->deskripsi = $request->deskripsi; 

            $result = Master_kategori::where('initial','=',$request->initial)->first();
            if (sizeof($result) > 0){

                Session::flash('init', "Inisial Sudah Ada");
                return Redirect::back();

            }
            else
            {
                $az_mast_kategori->initial = strtoupper($request->initial);
            } 

             

        // untuk mengsave
        $az_mast_kategori->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/kategori');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'nama_kategori' => 'required',
                'deskripsi' => 'required',
                'initial' => 'required',
               
            ]);
        
        $az_mast_kategori = Master_kategori::where('id','=',$id)->first();

            $az_mast_kategori->nama_kategori = strtoupper($request->nama_kategori); 
            $az_mast_kategori->deskripsi = $request->deskripsi; 
            $az_mast_kategori->initial = strtoupper($request->initial); 

        $az_mast_kategori->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/kategori');
    }

    public function delete($id){
        // find khusus untuk primary key di database
        $az_mast_kategori = Master_kategori::where('id','=',$id)->first();
        $az_mast_kategori->is_active = 0;
        $az_mast_kategori->save();

        // sama aja kaya href setelak klik delete
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/kategori');
    } 
}