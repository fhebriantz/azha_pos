<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\User_management;
use App\Http\Controllers\Model\User_cms;
use Session;
use DateTime;
use GuzzleHttp;

use vendor\autoload;

class LoginController extends Controller
{ 

    // ============================ DMS LOGIN ==============================

    public function show(Request $request)
    {
        $request->session()->forget('message');
        return view('pages/pos/login');
    }

    public function success_register()
    {
        return view('pages/pos/register_notif');
    }

    public function login(Request $request){

        $request->session()->forget('message');
        $request->session()->forget('email');
        $username = $request->username;
        $password = sha1($request->password);
        $password = $password;

        $checkLogin = User_management::where(['username'=>$username,'password'=>$password])
        ->join('az_user_group', 'az_user_group.id', '=', 'az_user_management.id_user_group')
        ->join('az_mast_outlet', 'az_mast_outlet.id', '=', 'az_user_management.id_outlet')
        ->select('az_user_management.*', 'az_user_group.usergroup', 'az_mast_outlet.nama_outlet')
        ->get(); 

        if (sizeof($checkLogin) > 0){
            foreach ($checkLogin as $key => $val) {

                $id_akun = $val->id;
                $id_user_group = $val->id_user_group;
                $id_outlet = $val->id_outlet;
                $username = $val->username;
                $usergroup = $val->usergroup;
                $nama_outlet = $val->nama_outlet;

                $request->session()->put('session_login', true);
                $request->session()->put('session_id', $id_akun);
                $request->session()->put('session_username', $id_user_group);
                $request->session()->put('session_id_group', $id_outlet);
                $request->session()->put('session_group', $username);
                $request->session()->put('session_project', $usergroup);
                $request->session()->put('session_id_loc', $nama_outlet);
                return  redirect('/dashboard');
            }
        }
        else{
            $request->session()->put('message', "Login failed username/password not match");
            return view('pages/pos/login');
        }
    }

    public function testapi($no_telp,$username,$email){

        $clientA = new GuzzleHttp\Client();
        $str_phone = substr($no_telp, 1);

        $response = $clientA->request('GET', 'http://www.etracker.cc/bulksms/mesapi.aspx?user=AzhaDHL01&pass=y1,i3qFa&type=0&to=62'.$str_phone.'&from=CMK&text=Hai '.$username.' selamat bergabung di Azhapos, verifikasi akun anda dan lengkapi data diri dengan cara klik tautan yang kami kirimkan ke '.$email.', Terimakasih.&servid=MES01&title=test sms gateway'); 
    }

    function signup (Request $request)  
    {
        $request->session()->forget('message');
        $request->session()->forget('email');
        $validatedData = $request->validate([

                'username' => 'required',
                'email' => 'required',
                'handphone' => 'required',
                'password' => 'required|confirmed',

            ]);

        $az_user_management = new User_management;

            $password = sha1($request->password);
            $confirm = sha1($request->password_confirmation);

            $az_user_management->username = $request->username; 
            $az_user_management->email = $request->email; 
            $az_user_management->handphone = $request->handphone; 
            $az_user_management->is_superadmin = 0; 
            $az_user_management->is_active = 0; 
            $az_user_management->is_sms = 0; 
            $az_user_management->is_email = 0; 
            $az_user_management->sms_code = "text sms"; 
            $az_user_management->email_code = "text email"; 
            $az_user_management->password = $password; 
            $az_user_management->password = $confirm; 

        // untuk mengsave
        $az_user_management->save();

        $no_telp = $request->handphone;
        $username = $request->username;
        $email = $request->email;

        $request->session()->put('email', $email);

        $this->testapi($no_telp,$username,$email);

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('/success_register');
    }

    

     public function logout (Request $request){
                $request->session()->forget('session_login');
                $request->session()->forget('session_id');
                $request->session()->forget('session_username');
                $request->session()->forget('session_id_group');
                $request->session()->forget('session_group');
                $request->session()->forget('session_project');
                $request->session()->forget('session_id_loc');
                $request->session()->forget('message');
                $request->session()->forget('email');

                // $request->session()->flush();

                return  redirect('/index');
    }

}
