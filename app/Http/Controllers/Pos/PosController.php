<?php

namespace App\Http\Controllers\Pos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class PosController extends Controller
{
    public function index()
    {
        return view('pages/pos/index');
    }

    public function login()
    {
        return view('pages/pos/login');
    }

    public function signup()
    {
        return view('pages/pos/signup');
    }

    public function dashboard()
    {
        return view('pages/pos/dashboard');
    }

    public function master()
    {
        return view('pages/pos/master');
    }

    public function trans_master()
    {
        return view('pages/pos/trans_master');
    }

    public function user_master()
    {
        return view('pages/pos/user_master');
    }
}
