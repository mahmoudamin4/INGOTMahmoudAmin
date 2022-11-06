<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        
    }
    public function adminHome()
    {
        $Business_data  = User::where('is_admin',0)->get();
        return view('admin', ['Business_data' => $Business_data ]);
        
    }
    public function staff(){
         return view('dashboard');
    }
}
