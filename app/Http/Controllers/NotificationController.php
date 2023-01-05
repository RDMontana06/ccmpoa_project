<?php

namespace App\Http\Controllers;
use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //

    public function create($request)
    {
        $new_notif = new Notification;
        $new_notif->action = $request->action;
        $new_notif->message = $request->message;
        $new_notif->user_id = $request->user_id;
        $new_notif->action_by = auth()->user()->id;
        $new_notif->table_id = $request->table_id;
        $new_notif->table_name = $request->table_name;
        $new_notif->save();

        return "success";
    }
}
