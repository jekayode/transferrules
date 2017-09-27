<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function install()

    {
        $password = 'password';

        DB::table('admins')->insert(
        [

        'username' => 'kayode', 
        'first_name' => 'Kayode',
        'last_name' =>'Kayode',
        'email' => 'kayode@live.com',
        'itle' => 'Admin',
        'avatar' => 'kayode.jpg',
        'password' => Hash::make($password),

        ]
);
    }
}
