<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::with('role')->get();
        // $profiles = Profile::with('users')->where('user_id', $users->id)->get();
        // dd($users);
        return view('users.index', array(
            'header' => 'accountSettings',
            'submenu' => 'userAccounts',
            'users' => $users,
        ));
    }
    public function reset_password()
    {
    }
    public function disable_account($id){
        User::Where('id', $id)->update(['status' => 0]);
        return back();
    }
}
