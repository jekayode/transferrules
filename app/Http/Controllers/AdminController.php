<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Admin;
Use App\User;
Use App\Wallet;
Use App\Fund;
Use App\Beneficiary;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $wallets = Wallet::all();
        $admins = Admin::all();
        
        $funds = Fund::all();

        return view('admin.dashboard', compact('users','wallets','admins', 'funds'));
    }
}
