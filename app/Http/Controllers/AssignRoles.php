<?php

namespace App\Http\Controllers;

use App\Models\assign_role;
use App\Models\User;
use App\Models\user_role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class AssignRoles extends Controller
{
    public function registration(Request $request)
    {
        $store = new User();
        $store->name = $request->name; //1st refer_by is the database column name the 2nd refer_by is the fieldname of the form
        $store->email = $request->email;
        $store->password =Hash::make($request->password);
        $store->mobile = $request->mobile;
        // $store->status = $request->status;
        $store->save();

        if($store){
            return redirect("superadmin")->with('messege',"registered successfully");
        }
    }


    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        $user = User::join('assign_roles', 'users.user_id', '=', 'assign_roles.user_id')
                   ->join('user_roles', 'assign_roles.user_role_id', '=', 'user_roles.user_role_id')
                   ->where('users.email', $request->email)
                   ->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Session::put('lognId', $user->user_id);

                if ($user->role == 'superadmin') {
                    return view('superadmin');
                } elseif ($user->role == 'admin') {
                    return view('admin');
                } else {
                    return view('user');
                }
            } else {
                Session::flash('error', 'Invalid password');
            }
        } else {
            Session::flash('error', 'User not found');
        }

        return redirect('login');
    }


    public function assignrole(Request $request){
        $store = new assign_role();
        $store->user_id = $request->user_id;
        $store->user_role_id = $request->user_role_id;
        $store->save();

        if($store){
            return redirect("superadmin")->with('messege',"registered successfully");
        }


    }

    public function addroles(Request $request){
        $store = new user_role();
        $store->role = $request->role;
        $store->save();

        if($store){
            return redirect("superadmin")->with('messege',"registered successfully");
        }
    }

    

}
