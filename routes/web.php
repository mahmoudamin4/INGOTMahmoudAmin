<?php



// use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'staff'])->name('home');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');



//Categories
Route::get('categories', [App\Http\Controllers\User\Category::class, 'categories']);
Route::post('/add-category', [App\Http\Controllers\User\Category::class, 'add_category']);
Route::get('all_category', [App\Http\Controllers\User\Category::class, 'get_category']);
Route::get('category/settings/{id}', [App\Http\Controllers\User\Category::class, 'category_delete']);
Route::get('all_category/edit/{categoryID}', [App\Http\Controllers\User\Category::class, 'Edit_category']);
Route::post('/updata-category', [App\Http\Controllers\User\Category::class, 'Updata_category']);


//Transactions 
Route::get('add_transactions', [App\Http\Controllers\User\Transactions::class, 'transactions']);
Route::post('/new-transaction', [App\Http\Controllers\User\Transactions::class, 'add_transaction']);
Route::get('/transaction',[App\Http\Controllers\User\Transactions::class, 'get_transaction']);


//Profile
Route::get('/profile',[App\Http\Controllers\User\Profile::class, 'View_profile']);
Route::post('/updata-profile', [App\Http\Controllers\User\Profile::class, 'Updata_profile']);
Route::get('change_password',[App\Http\Controllers\User\Profile::class, 'View']);
Route::post('update_password', [App\Http\Controllers\User\Profile::class, 'update_password'])->name('update_password');

//Link
Route::get('add_link',[App\Http\Controllers\User\Link::class, 'Add_Referral']);
Route::post('/new-link', [App\Http\Controllers\User\Link::class, 'new_Referral']);
Route::get('referral',[App\Http\Controllers\User\Link::class, 'all_affiliate']);
Route::get('referral/edit/{user_id}', [App\Http\Controllers\User\Link::class, 'edit_affiliate']);
Route::post('/updata-link', [App\Http\Controllers\User\Link::class, 'Updata_affiliate']);
Route::get('referral/settings', [App\Http\Controllers\User\Link::class, 'link_delete']);
Route::get('register/{name?}', [App\Http\Controllers\User\Link::class, 'register_link']);
Route::get('user_list',[App\Http\Controllers\User\Link::class, 'User_list']);


View::composer(['*'],function($view){


    $transactions = DB::table('users_transactions')
    ->where('userID',Auth::id())
    ->get();

    $transactionsCount = $transactions->count();

  $view->with(['transactionsCount'=>$transactionsCount]);
} );


