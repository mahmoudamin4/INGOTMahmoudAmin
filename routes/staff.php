<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//Profile
Route::get('staff', [App\Http\Controllers\staff\StaffController::class, 'staff'])->name('staff');


//User
Route::get('staff/users', [App\Http\Controllers\staff\UsersController::class, 'staff_users']);
Route::get('staff/users', [App\Http\Controllers\staff\UsersController::class, 'account']);
Route::get('staff/users/edit_user/{id}', [App\Http\Controllers\Staff\UsersController::class, 'edit']);
Route::post('/updata-user', [App\Http\Controllers\Staff\UsersController::class, 'Updata_users']);
Route::get('delete_users/{id}', [App\Http\Controllers\Staff\UsersController::class, 'delete']);


//Dashboard

View::composer(['*'],function($view){

   
   
      $Users = DB::table('users')
      ->where('is_admin',null)
      ->get(); 

      $amount = DB::table('users_transactions')
      ->where('userID',Auth::id())
      ->sum('amount');
      
      $UsersCount = $Users->count();

    $view->with(['UsersCount'=>$UsersCount,'amount'=>$amount ]);
  } );
