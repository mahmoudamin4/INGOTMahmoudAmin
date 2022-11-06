<?php

namespace App\Http\Controllers\Staff;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Business\Affiliate;
use App\Models\Business\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
    


    public function staff_users()
    {
        return view('Staff/users');
    }
    public function account()
    {

        $user_data= User::where('is_admin',null)->get();

        return view('Staff/users', ['user_data' => $user_data]);
    }

    public function edit()
    {
        
        $ID = request('id');
        $user_data= User::where('id', $ID)
         ->get();

         $referral=Affiliate::select('*')
        ->where('user_id',$ID)
        ->value('referral');

        $user_list=User::where('users.referral',$referral)
        ->get();
    
        $numberuser=$user_list->count();

        $expenses =Transaction::where('userID',$ID)
        ->sum('amount');

        
        return view('Staff/edit_user', ['user_data'=>$user_data,
                                        'numberuser'=>$numberuser,
                                        'expenses'=>$expenses,]);
    }


    public function Updata_users(Request $request)
    {
        $id = request('id');
        $Fname = request('Fname');
        $email = request('email');
        $mobile = request('mobile');
        $wallet = request('wallet');

        $file = $request->file('pro-image');
        $OriginalName = $file->getClientOriginalName();
        $products_img = date('ymdhms').''.$OriginalName;
        $destinationPath = 'assets/images/users';
        $file->move($destinationPath,$products_img);

        User::where('id', $id)
        ->update([
                
                'name'=>$Fname,
                'email'=>$email,
                'mobile'=>$mobile,
                'profile_image' => $products_img,
                'wallet'=>$wallet 
            ]);

            return  redirect('staff/users');
    }

    public function delete($id){

        
        User::where([
            'id'=>request('id')
            ])
           ->delete();

           return redirect('/staff/users');
    }

}
