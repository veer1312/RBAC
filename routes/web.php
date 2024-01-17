<?php

use App\Http\Controllers\AssignRoles;
use App\Models\user_role;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('registration',function(){
    $role = user_role::all();
return view('registration')->with('role',$role);
});

Route::post('registration',[AssignRoles::class,'registration']);

Route::get('login',function(){
return view('login');
});
Route::post('login',[AssignRoles::class,'login']);

Route::get('superadmin',function(){
    return view('superadmin');
    });

Route::get('assignrole',function(){
    $user=User::all();
    $role=user_role::all();
    return view('assignrole')->with('users',$user)->with('role',$role);
    });
Route::post('assignrole',[AssignRoles::class,'assignrole']);

// add roles
Route::get('addrole',function(){
    return view('addrole');
    });

Route::post('addroles',[AssignRoles::class,'addroles']);

// demo

Route::get('demo',function(){
    return view('demo');
    });










