<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\Master_pelanggan;

class Master_pelangganController extends Controller
{
    public function list_pelanggan()
    {
        $az_mast_pelanggan = Master_pelanggan::all();
        return view('pages/cms/Master_pelanggan/Master_pelanggan', compact('az_mast_pelanggan'));
    }

    public function tambah_pelanggan()
    {
        $az_mast_pelanggan = Master_pelanggan::all();
        return  view('pages/cms/Master_pelanggan/Master_pelanggan_input', compact('az_mast_pelanggan'));
    }

    public function edit_pelanggan($id)
    {
        $az_mast_pelanggan = Master_pelanggan::where('id','=',$id)->first();
        return  view('pages/cms/Master_pelanggan/Master_pelanggan_edit', compact('az_mast_pelanggan'));
    }


    // menampilkan fungsi input
    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'email' => 'required',
                'handphone' => 'required',
                'alamat' => 'required',
                'nama_pelanggan' => 'required',
            ]);

        $az_mast_pelanggan = new Master_pelanggan;

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $az_mast_pelanggan->tempat_lahir = $request->tempat_lahir; 
            $az_mast_pelanggan->tgl_lahir = $request->tgl_lahir; 
            $az_mast_pelanggan->email = $request->email; 
            $az_mast_pelanggan->handphone = $request->handphone; 
            $az_mast_pelanggan->alamat = $request->alamat; 
            $az_mast_pelanggan->nama_pelanggan = $request->nama_pelanggan; 
        // untuk mengsave
        $az_mast_pelanggan->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/pelanggan');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'email' => 'required',
                'handphone' => 'required',
                'alamat' => 'required',
                'nama_pelanggan' => 'required',
               
            ]);
        
        $az_mast_pelanggan = Master_pelanggan::where('id','=',$id)->first();

            $az_mast_pelanggan->tempat_lahir = $request->tempat_lahir; 
            $az_mast_pelanggan->tgl_lahir = $request->tgl_lahir; 
            $az_mast_pelanggan->email = $request->email; 
            $az_mast_pelanggan->handphone = $request->handphone; 
            $az_mast_pelanggan->alamat = $request->alamat; 
            $az_mast_pelanggan->nama_pelanggan = $request->nama_pelanggan; 

        $az_mast_pelanggan->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/pelanggan');
    }

    public function delete($id){
        // find khusus untuk primary key di database
        $az_mast_pelanggan = Master_pelanggan::where('id','=',$id)->first();
        $az_mast_pelanggan->delete();

        // sama aja kaya href setelak klik delete
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/pelanggan');
    } 
}