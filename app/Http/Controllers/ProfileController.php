<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    // User Index
    public function index(){
        $users = User::all();
        return view('profile.index', array(
            'users' => $users,
        ));
    }
}
