<?php

namespace App\Http\Controllers;
use App\Follower;
use Illuminate\Http\Request;

class FollowersController extends Controller
{
    //

    public function index(Request $request)
    {
        // dd($request->all());
        if(str_contains($request->following_data,"is-shifted"))
        {
            $follow = Follower::where('user_id',$request->id)->where('follower_id',auth()->user()->id)->where('deleted_at',null)->delete();
        }
        else
        {
            $follow = new Follower;
            $follow->user_id = $request->id;
            $follow->follower_id = auth()->user()->id;
            $follow->save();
        }
        return $follow;
    }
}
