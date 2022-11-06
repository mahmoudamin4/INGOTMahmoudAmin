<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Profile extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function View_profile()
    {
        $vendor_id =User::select('*')
        ->where('id', '=', Auth::id())
        ->value('id');

        $profile_data = User::where('id', $vendor_id)
        ->get();

        return view('profile', ['profile_data' => $profile_data]);
    }

    public function Updata_profile(Request $request)
    {
        $id = request('id');
        $name = request('name');
        $email = request('email');
        $mobile = request('mobile');
        $birthdate = request('birthdate');

        $file = $request->file('pro-image');
        $OriginalName = $file->getClientOriginalName();
        $img = date('ymdhms').''.$OriginalName;
        $destinationPath = 'assets/images/users';
        $file->move($destinationPath,$img);

        User::where('id', $id)
        ->update([
                
                'name'=>$name,
                'birthdate'=>$birthdate,
                'email'=>$email,
                'mobile'=>$mobile,
                'profile_image' => $img  
            ]);

            return redirect()->back();

    }

    public function View()
    {
        return view('change_password');
    }

    public function update_password(Request $request)
     {
         $request->validate([
             'oldpassword'=>'required|min:8|max:30',
             'newpassword'=>'required|min:8|max:30',
             'passwordconfi'=>'required|same:newpassword'
         ]);
         
         $current_user=auth()->user();

         if(Hash::check($request->oldpassword,$current_user->password)){
             $current_user->update([
                 'password'=>bcrypt($request->newpassword)
             ]);
             
             return redirect()->back()->with('success','Password sucessfully');
         }
         else{
            return redirect()->back()->with('success','Password sucessfully');

         }
     }

}
