<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\User_group;

class User_groupController extends Controller
{
    public function list_user_group()
    {
        $az_user_group = User_group::all();
        return view('pages/cms/User_group/User_group', compact('az_user_group'));
    }

    public function tambah_user_group()
    {
        $az_user_group = User_group::all();
        return  view('pages/cms/User_group/User_group_input', compact('az_user_group'));
    }

    public function edit_user_group($id)
    {
        $az_user_group = User_group::where('id','=',$id)->first();
        return  view('pages/cms/User_group/User_group_edit', compact('az_user_group'));
    }

    
    // menampilkan fungsi input
    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'usergroup' => 'required',
                'description' => 'required',
                'is_active' => 'required',
            ]);

        $az_user_group = new User_group;

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $az_user_group->usergroup = $request->usergroup; 
            $az_user_group->description = $request->description; 
            $az_user_group->is_active = $request->is_active; 
        // untuk mengsave
        $az_user_group->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/user_group');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'usergroup' => 'required',
                'description' => 'required',
                'is_active' => 'required',
               
            ]);
        
        $az_user_group = User_group::where('id','=',$id)->first();

            $az_user_group->usergroup = $request->usergroup; 
            $az_user_group->description = $request->description; 
            $az_user_group->is_active = $request->is_active; 

        $az_user_group->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/user_group');
    }

    public function delete($id){
        // find khusus untuk primary key di database
        $az_user_group = User_group::where('id','=',$id)->first();
        $az_user_group->delete();

        // sama aja kaya href setelak klik delete
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/user_group');
    } 
}