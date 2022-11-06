<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Business\Category;
use App\Models\Business\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Transactions extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
    
    public function transactions()
    {
        $vendor_id =User::select('*')
        ->where('id', '=', Auth::id())
        ->value('id');

        $cate=Category::where('category_details.user_id',$vendor_id)
        ->orderByDesc('category_details.created_at')
        ->get();
       
        return view('add_transactions',['cate'=>$cate]);
    } 

    public function add_transaction(Request $request)
    {

        $recipient_number = request('recipient-number');
        $transfer_amount = request('amount');
        $category = request('category');
        $note = request('note');

        $oldwallet = User::where(['id'=> Auth::id()])
        ->value('wallet');

        $old_primrekey=Transaction::orderBy('created_at', 'desc')->value('id');
        $id=$old_primrekey+1;

        if($oldwallet >= $transfer_amount ){
            Transaction::Create(
                array(
                    'id'=>$id,
                    'userID' => Auth::id(),
                    'recipient_id' => $recipient_number,
                    'amount' => $transfer_amount,
                    'note'=>$note,
                    'category'=>$category
                )
            );

            User::where('id', Auth::id())
             ->update(['wallet' =>$oldwallet - $transfer_amount]);


            $recipientwallet = User::where(['mobile'=>$recipient_number])
             ->value('wallet');


            User::where('mobile', $recipient_number)
             ->update(['wallet' =>$recipientwallet + $transfer_amount ]);
        }else{
        return Redirect::back()->withErrors(['msg' => 'The Message']);
        }

        return  redirect()->back();
    }

    public function get_transaction(){

        $vendor_id =User::select('*')
        ->where('id', '=', Auth::id())
        ->value('id');
        
        $transaction=Transaction::select('*')
        ->where('users_transactions.userID',$vendor_id)
       ->orderByDesc('users_transactions.created_at')
       ->get();
   
       return view('transactions',['transaction'=>$transaction]);
   
      }
}
