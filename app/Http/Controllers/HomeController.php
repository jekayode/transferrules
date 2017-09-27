<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

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
        DB::table('admins')->insert(
        [

        'username' => 'jekayode', 
        'first_name' => 'Emmanuel',
        'last_name' =>'Joseph',
        'email' => 'jekayode@live.com',
        'itle' => 'Admin',
        'avatar' => 'jekayode.jpg'

        ]
);
    }
}
