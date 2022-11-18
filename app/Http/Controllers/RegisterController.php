<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use App\AccountRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Notifications\ApproverNotif;
use App\Notifications\RequestorNotif;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //
    public function register()
    {
        // dd($departments);
        return view('auth.register');
    }
    public function save(Request $request)
    {
        // dd($request);

        $validator = Validator::make($request->all(), [
            'members_code' => 'unique:users|required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|unique:users',
            'profile_picture' => 'required|mimes:jpeg,jpg,bmp,png',
            'phone_number' => 'required',
            'password' =>  'required|min:6|confirmed',
            'password_confirmation' =>  'same:password'
        ]);
        if ($validator->fails()) {
            return redirect('/signup')
                ->withErrors($validator)
                ->withInput();
        }

        $attachment = $request->file('profile_picture');
        $original_name = $attachment->getClientOriginalName();
        $name = time() . '_' . $attachment->getClientOriginalName();
        $attachment->move(public_path() . '/users/', $name);
        $file_name = '/users/' . $name;


        $user = new User;
        $user->members_code = $request->members_code;
        $user->name = $request->first_name . " " . $request->last_name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->profile_picture = $file_name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);

        $user->save();

        $user->session()->flash('status', 'Successfully Created');
        return redirect('/');
    }
    
}
