<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\Master_outlet;

use Webpatser\Uuid\Uuid;
use Webpatser\Uuid\UuidServiceProvider;

class Master_outletController extends Controller
{
    public function list_outlet()
    {
        $az_mast_outlet = Master_outlet::all();
        return view('pages/cms/Master_outlet/Master_outlet', compact('az_mast_outlet'));
    }

    public function tambah_outlet()
    {
        $az_mast_outlet = Master_outlet::all();
        return  view('pages/cms/Master_outlet/Master_outlet_input', compact('az_mast_outlet'));
    }

    public function edit_outlet($id)
    {
        $az_mast_outlet = Master_outlet::where('id','=',$id)->first();
        return  view('pages/cms/Master_outlet/Master_outlet_edit', compact('az_mast_outlet'));
    }


    // menampilkan fungsi input
    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'lokasi_outlet' => 'required',
                'nama_outlet' => 'required',
                'deskripsi' => 'required',
            ]);

        $az_mast_outlet = new Master_outlet;

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $az_mast_outlet->lokasi_outlet = $request->lokasi_outlet; 
            $az_mast_outlet->nama_outlet = $request->nama_outlet; 
            $az_mast_outlet->deskripsi = $request->deskripsi; 
        // untuk mengsave
        $az_mast_outlet->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/outlet');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'lokasi_outlet' => 'required',
                'nama_outlet' => 'required',
                'deskripsi' => 'required',
               
            ]);
        
        $az_mast_outlet = Master_outlet::where('id','=',$id)->first();

            $az_mast_outlet->lokasi_outlet = $request->lokasi_outlet; 
            $az_mast_outlet->nama_outlet = $request->nama_outlet; 
            $az_mast_outlet->deskripsi = $request->deskripsi; 

        $az_mast_outlet->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/outlet');
    }

    public function delete($id){
        // find khusus untuk primary key di database
        $az_mast_outlet = Master_outlet::where('id','=',$id)->first();
        $az_mast_outlet->delete();

        // sama aja kaya href setelak klik delete
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/outlet');
    } 
}