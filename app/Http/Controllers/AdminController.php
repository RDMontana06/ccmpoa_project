<?php

namespace App\Http\Controllers;

use App\User;
use App\Event;
use App\AccountRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Notifications\ApprovedRequest;
use Illuminate\Notifications\Notification;

class AdminController extends Controller
{

    public function index()
    {
        $users = User::all();
        // dd($users);
        $accountRequests = AccountRequest::orderBy('created_at', 'desc')->get();
        return view('admin.index', array(
            'users' => $users,
            'header' => 'dashboard',
            'submenu' => 'dashboard_sub',
            'accountRequests' => $accountRequests,
        ));
    }


    // Events
    public function events()
    {
        $events = Event::all();
        return view('admin.events', array(
            'header' => 'eventSettings',
            'submenu' => 'event',
            'events' => $events,
        ));
    }
}
