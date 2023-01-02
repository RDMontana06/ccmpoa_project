<?php

namespace App\Http\Controllers;

use App\CoverPhoto;
use Illuminate\Http\Request;
use App\User;
use App\UserAvatar;
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
        // dd($userPhotos->all());
        $coverProfile = CoverPhoto::with('user')->where('user_id', $id)->orderBy('created_at', 'desc')->first();
        $avatarProfile = UserAvatar::with('user')->where('user_id', $id)->orderBy('created_at', 'desc')->first();
            // dd($avatar);
        return view('profiles.index', array(
            'header' => 'Profile',
            'user' => $user,
            'coverProfile' => $coverProfile,
            'avatarProfile' => $avatarProfile,
            'id' => $id,
            
        ));
    }
    public function profilePhotos(Request $request){
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
        $coverProfile = CoverPhoto::with('user')->where('user_id', $id)->orderBy('created_at', 'desc')->first();

        $coverPhotos = CoverPhoto::with('user')->where('user_id', $id)->withTrashed()->get();
        //   dd($cover);
        $avatarProfile = UserAvatar::with('user')->where('user_id', $id)->orderBy('created_at', 'desc')->first();

        // $allPhotos = User::with('coverPhoto', 'userAvatar')->where('id', auth()->user()->id)->get();
        $allPhotos = User::with(['coverPhoto', 'userAvatar', 'attachments'])->where('id', $id)->get();
        // dd($allPhotos->coverPhoto->withTrashed());   
        return view('profiles.profile_photos', array(
            'header' => 'ProfilePhotos',
            'user' => $user,
            'coverProfile' => $coverProfile,
            'coverPhotos' => $coverPhotos,
            'avatarProfile' => $avatarProfile,
            'allPhotos' => $allPhotos,
            'id' => $id,
        ));
    }
    public function changeAvatar(Request $request)
    {
        // dd($request->all());
        $avatarImage = "avatar-".time().".png";
        $path = public_path() ."/avatar/" . $avatarImage;
        $file_name = "/avatar/" . $avatarImage;
        $img = $request->data;
        $img = substr($img, strpos($img, ",")+1);
        $data = base64_decode($img);
        $success = file_put_contents($path, $data);

        // Save Original
        $avatarFull = "avatar-".time().".png";
        $path_full = public_path() ."/avatar/" . $avatarFull;
        $file_name_full = "/avatar/" . $avatarFull;
        $img_full = $request->avatar;
        $img_full = substr($img_full, strpos($img_full, ",")+1);
        $data_full = base64_decode($img_full);
        $success = file_put_contents($path_full, $data_full);
        // $user = User::findOrfail(auth()->user()->id);
        // $user->profile_picture = $file_name;
        // $user->save();

        UserAvatar::where('user_id', auth()->user()->id)->delete();

        $coverPhoto = new UserAvatar();
        $coverPhoto->avatar = $file_name_full;
        $coverPhoto->user_id = auth()->user()->id;
        $coverPhoto->save();

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
        // $user = User::findOrfail(auth()->user()->id);
        // $user->cover_photo = $file_name;
        // $user->save();

        CoverPhoto::where('user_id', auth()->user()->id)->where('status', 1)->delete();

        $coverPhoto = new CoverPhoto();
        $coverPhoto->image = $file_name;
        $coverPhoto->user_id = auth()->user()->id;
        $coverPhoto->save();

        
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
