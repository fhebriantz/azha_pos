<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\User_management;
use App\Http\Controllers\Model\User_group;
use Session;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Model\Master_outlet;

class User_managementController extends Controller
{
    public function list_user_management()
    {
        $az_user_management =  User_management::getTableUser();
        return view('pages/cms/User_management/User_management', compact('az_user_management'));
    }

    public function tambah_user_management()
    {
        $az_user_management = User_management::all();
        $az_user_group = User_group::all();
        $az_mast_outlet = Master_outlet::all();
        return  view('pages/cms/User_management/User_management_input', compact('az_user_management','az_user_group','az_mast_outlet'));
    }

    public function edit_user_management($id)
    {
        $az_user_management = User_management::where('id','=',$id)->first();
        $az_user_group = User_group::all();
        $az_mast_outlet = Master_outlet::all();
        return  view('pages/cms/User_management/User_management_edit', compact('az_user_management','az_user_group','az_mast_outlet'));
    }


    public function gantipas_user_management($id)
    {
        $az_user_management = User_management::where('id','=',$id)->first();
        $az_user_group = User_group::all();
        $az_mast_outlet = Master_outlet::all();
        return  view('pages/cms/User_management/User_management_gantipas', compact('az_user_management','az_user_group','az_mast_outlet'));
    }

    
    // menampilkan fungsi input
    function insert (Request $request)  
    {
        $validatedData = $request->validate([

                'id_user_group' => 'required',
                'id_outlet' => 'required',
                'username' => 'required',
                'email' => 'required',
                'password' => 'required',
                'is_superadmin' => 'required',
                'is_active' => 'required',

                'id_kota' => 'required',
                'id_provinsi' => 'required',
                'nama_lengkap' => 'required',
                'alamat' => 'required',
                'kodepos' => 'required',
                'no_telp' => 'required',
                'handphone' => 'required',
            ]);

        $az_user_management = new User_management;

            $password = sha1($request->password);

            $az_user_management->id_user_group = $request->id_user_group; 
            $az_user_management->id_outlet = $request->id_outlet; 
            $az_user_management->username = $request->username; 
            $az_user_management->email = $request->email; 
            $az_user_management->password = $password; 
            $az_user_management->is_superadmin = $request->is_superadmin; 
            $az_user_management->is_active = $request->is_active; 

            $az_user_management->id_kota = $request->id_kota; 
            $az_user_management->id_provinsi = $request->id_provinsi; 
            $az_user_management->nama_lengkap = $request->nama_lengkap; 
            $az_user_management->alamat = $request->alamat; 
            $az_user_management->kodepos = $request->kodepos; 
            $az_user_management->no_telp = $request->no_telp; 
            $az_user_management->handphone = $request->handphone; 
        // untuk mengsave
        $az_user_management->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/user_management');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'id_user_group' => 'required',
                'id_outlet' => 'required',
                'username' => 'required',
                'email' => 'required',
                'is_superadmin' => 'required',
                'is_active' => 'required',

                'id_kota' => 'required',
                'id_provinsi' => 'required',
                'nama_lengkap' => 'required',
                'alamat' => 'required',
                'kodepos' => 'required',
                'no_telp' => 'required',
                'handphone' => 'required',
               
            ]);
        
        $az_user_management = User_management::where('id','=',$id)->first();

            $password = sha1($request->password);

            $az_user_management->id_user_group = $request->id_user_group; 
            $az_user_management->id_outlet = $request->id_outlet; 
            $az_user_management->username = $request->username; 
            $az_user_management->email = $request->email;
            $az_user_management->is_superadmin = $request->is_superadmin; 
            $az_user_management->is_active = $request->is_active; 

            $az_user_management->id_kota = $request->id_kota; 
            $az_user_management->id_provinsi = $request->id_provinsi; 
            $az_user_management->nama_lengkap = $request->nama_lengkap; 
            $az_user_management->alamat = $request->alamat; 
            $az_user_management->kodepos = $request->kodepos; 
            $az_user_management->no_telp = $request->no_telp; 
            $az_user_management->handphone = $request->handphone; 

        $az_user_management->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/user_management');
    }

     // menampilkan fungsi edit
    function ubah_password (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'old_password' => 'required',
                'new_password' => 'required',
                'password_confirmation' => 'required',
                

            ]);
        
        $az_user_management = User_management::where('id','=',$id)->first();

            $old_password = sha1($request->old_password);
            $db_password = $az_user_management->password;

            $new = $request->new_password;
            $confirm = $request->password_confirmation; 

            $new_password =  sha1($new);

            if ($old_password == $db_password){

                if ($new == $confirm) {

                    $az_user_management->password = $new_password; 
                    $az_user_management->save();
                    return  redirect('/user_management');
                }
                else{
                    Session::flash('confirm_pass', "Konfirmasi Tidak Cocok");
                    Session::flash('old_pass', "Password Lama Benar");
                    return Redirect::back();
                }
                
            }else{
                Session::flash('old_pass', "Password Lama Salah");
                return Redirect::back();
            }

    }

    public function delete($id){
        // find khusus untuk primary key di database
        $az_user_management = User_management::where('id','=',$id)->first();
        $az_user_management->delete();

        // sama aja kaya href setelak klik delete
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/user_management');
    } 
}