<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Business\Category as BusinessCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Category extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function categories()
    {
        return view('add_category');
    }

    public function add_category(Request $request)
    {

        $category_name = request('category');
    

        $user_id =User::select('*')
        ->where('id', '=', Auth::id())
        ->value('id');
        

        $old_primrekey=BusinessCategory::orderBy('created_at', 'desc')->value('category_id');
        $category_id=$old_primrekey+1;

        BusinessCategory::Create(
        array(
            'category_id'          => $category_id ,
            'name'                => $category_name ,
            'user_id'             =>$user_id
        )
        );

        return redirect()->back();
    }

   public function get_category()
    {
        $vendor_id =User::select('*')
        ->where('id', '=', Auth::id())
        ->value('id');

        $category=BusinessCategory::where('category_details.user_id',$vendor_id)
        ->orderByDesc('category_details.created_at')
        ->get();

        $category=BusinessCategory::where('category_details.user_id',$vendor_id)
        ->get();

        $numbercategory=$category->count();


        return view('all_category',['category'=>$category,'numbercategory'=>$numbercategory]);

    }

   public function category_delete()
    {
        $category_id = request('id');

        BusinessCategory::where([
            'category_id'=> $category_id,
            ])
            ->delete();
            
        return redirect()->back();
    }

    public function Edit_category()
    {
        $categoryID = request('categoryID');
       
        $category_details = BusinessCategory::where('category_id', $categoryID)
        ->get();

        return view('edit_category',[
            'category_details' => $category_details
        ]);
    }

    public function Updata_category(Request $request)
    {
        $categoryID = request('categoryID');
        $category_name = request('category_name');
    

        $vendor_id =User::select('*')
        ->where('id', '=', Auth::id())
        ->value('id');


        BusinessCategory::where('category_id', $categoryID)
        ->update([
                'user_id' => $vendor_id ,
                'name' => $category_name ,                         
            ]);

           
            return  redirect('all_category');
    }


}
