<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff\Staff;
use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function staff()
    {
     
        return view('Staff/dashboard');
    }
    
 

    




}
