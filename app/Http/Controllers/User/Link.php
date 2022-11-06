<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Business\Affiliate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Link extends Controller
{



    public function Add_Referral()
    {
        return view('add_link');
    }

    public function new_Referral()
    {	

        $link = 'http://localhost/INGOTMahmoudAmin/public/register/'.request('link');

        Affiliate::Create(
            array(
                'user_id'=>Auth::id(),
                'name' => $link,
                'referral'=>request('link')
            )
        );
        return redirect()->back();
    }

    public function all_affiliate()
    {

        $all=Affiliate::where('user_id',Auth::id())
        ->get();
        return view('referral',['all'=>$all]);
    }

    public function edit_affiliate()
    {
     $linkID = request('user_id');

     
     $link_details = Affiliate::where('user_id', $linkID)
     ->get();
 
     return view('edit_link',['link_details'=> $link_details]);
    }

    public function Updata_affiliate(Request $request)
    {
        $linkID = request('user_id');
        $link_Name = request('namelink');


       Affiliate::where('user_id', $linkID)
       ->update([
               'name' => $link_Name                      
           ]);

           return  redirect()->back();
    }

    public function link_delete()
    {
        $linkID = request('id');

        Affiliate::where([
          'user_id'=> $linkID,
          ])
         ->delete();
         
         return  redirect()->back();
    }

    public function register_link(Request $request)
    {
        $slug = request('name');

        if($slug){
           
         
            return view('auth/register',['slug'=>$slug]);
    
        }else{

            return redirect('/');   
    
        }

    }

    public function User_list()
    {
        $referral=Affiliate::select('*')
        ->where('user_id',Auth::id())
        ->value('referral');

        $user=User::where('referral',$referral)
        ->get();

        $user_list=User::where('users.referral',$referral)
        ->get();
    
        $numberuser=$user_list->count();
        

        return view('user_list',['user'=>$user,'numberuser'=>$numberuser]);
    }
}
