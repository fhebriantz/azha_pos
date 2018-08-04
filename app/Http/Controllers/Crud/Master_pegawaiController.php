<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\Master_pegawai;

class Master_pegawaiController extends Controller
{
    public function list_pegawai()
    {
        $az_mast_pegawai = Master_pegawai::all();
        return view('pages/cms/Master_pegawai/Master_pegawai', compact('az_mast_pegawai'));
    }

    public function tambah_pegawai()
    {
        $az_mast_pegawai = Master_pegawai::all();
        return  view('pages/cms/Master_pegawai/Master_pegawai_input', compact('az_mast_pegawai'));
    }

    public function edit_pegawai($id)
    {
        $az_mast_pegawai = Master_pegawai::where('id','=',$id)->first();
        return  view('pages/cms/Master_pegawai/Master_pegawai_edit', compact('az_mast_pegawai'));
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
                'nama_pegawai' => 'required',
            ]);

        $az_mast_pegawai = new Master_pegawai;

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $az_mast_pegawai->tempat_lahir = $request->tempat_lahir; 
            $az_mast_pegawai->tgl_lahir = $request->tgl_lahir; 
            $az_mast_pegawai->email = $request->email; 
            $az_mast_pegawai->handphone = $request->handphone; 
            $az_mast_pegawai->alamat = $request->alamat; 
            $az_mast_pegawai->nama_pegawai = $request->nama_pegawai; 
        // untuk mengsave
        $az_mast_pegawai->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/pegawai');
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
                'nama_pegawai' => 'required',
               
            ]);
        
        $az_mast_pegawai = Master_pegawai::where('id','=',$id)->first();

            $az_mast_pegawai->tempat_lahir = $request->tempat_lahir; 
            $az_mast_pegawai->tgl_lahir = $request->tgl_lahir; 
            $az_mast_pegawai->email = $request->email; 
            $az_mast_pegawai->handphone = $request->handphone; 
            $az_mast_pegawai->alamat = $request->alamat; 
            $az_mast_pegawai->nama_pegawai = $request->nama_pegawai; 

        $az_mast_pegawai->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/pegawai');
    }

    public function delete($id){
        // find khusus untuk primary key di database
        $az_mast_pegawai = Master_pegawai::where('id','=',$id)->first();
        $az_mast_pegawai->delete();

        // sama aja kaya href setelak klik delete
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/pegawai');
    } 
}