<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // return view('admin.v_dashboard');
        echo "halo,selamat datang";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href ='/logout'>Logout>></a>";
    }

    public function admin()
    {
        $data = [
            'judul'=> 'Dashboard',
            'nama'=>'wiranda',
            'alamat'=>'padang',
            'prodi'=>'informatika'

        ];
        return view('admin.v_dashboard',$data);
        // echo "halo,selamat datang admin";
        // echo "<h1>" . Auth::user()->name . "</h1>";
        // echo "<a href ='/logout'>Logout>></a>";
    }
    public function user()
    {
        return view('user.v_dashboard');
        // echo "halo,selamat datang user";
        // echo "<h1>" . Auth::user()->name . "</h1>";
        // echo "<a href ='/logout'>Logout>></a>";
    }

    public function m_users()
    {
        return view('admin.v_m_users');
        // echo "halo,selamat datang user";
        // echo "<h1>" . Auth::user()->name . "</h1>";
        // echo "<a href ='/logout'>Logout>></a>";
    }


}
