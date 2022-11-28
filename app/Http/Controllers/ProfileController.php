<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserProfile;
use RealRashid\SweetAlert\Facades\Alert;
class ProfileController extends Controller
{
    // User Index
    public function index(Request $request)
    {
        $id = auth()->user()->id;
        if($request->id)
        {
            $id = $request->id;
        }
        $user = User::with(['posts' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }
        ,'attachments','followers.user','following','information'])->findOrfail($id);
        // dd($user);
        // dd($user);
        return view('profiles.index', array(
            'header' => 'Profile',
            'user' => $user,
        ));
    }
    public function changeAvatar(Request $request)
    {
        $avatarImage = "avatar-".time().".png";
        $path = public_path() ."/avatar/" . $avatarImage;
        $file_name = "/avatar/" . $avatarImage;
        $img = $request->data;
        $img = substr($img, strpos($img, ",")+1);
        $data = base64_decode($img);
        $success = file_put_contents($path, $data);
        $user = User::findOrfail(auth()->user()->id);
        $user->profile_picture = $file_name;
        $user->save();
        return $success;
    }
    public function uploadCoverPhoto(Request $request)
    {
        $coverPhoto = "coverPhoto-".time().".png";
        $path = public_path() ."/coverPhoto/" . $coverPhoto;
        $file_name = "/coverPhoto/" . $coverPhoto;
        $img = $request->data;
        $img = substr($img, strpos($img, ",")+1);
        $data = base64_decode($img);
        $success = file_put_contents($path, $data);
        $user = User::findOrfail(auth()->user()->id);
        $user->cover_photo = $file_name;
        $user->save();
        return $success;
    }
    public function updateInformation(Request $request)
    {
        $user = UserProfile::where('user_id',auth()->user()->id)->delete();
     
        $new_user = new UserProfile;
        $new_user->user_id = auth()->user()->id;
        $new_user->studied_at = $request->studied_at;
        $new_user->place_from = $request->from;
        $new_user->lives_in = $request->lives_in;
        $new_user->save();
        Alert::success('Successfully Updated', 'You may now view your updated information.')->persistent('Dismiss');
        return back();
    }
}
