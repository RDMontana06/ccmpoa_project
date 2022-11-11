<?php

namespace App\Http\Controllers;

use App\AccountRequest;
use App\User;
use Illuminate\Http\Request;

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
    // Account Request Index
    public function accountRequest()
    {
        $acctRequests = AccountRequest::where('status', '!=', 'Rejected')->get();
        // dd($acctRequests);
        return view('admin.accountRequest', array(
            'header' => 'accountSettings',
            'submenu' => 'accountRequest',
            'acctRequests' => $acctRequests,
        ));
    }
    // User Account Index
    public function userAccounts()
    {
        $users = User::with('role')->get();
        // dd($users);
        return view('admin.users', array(
            'header' => 'accountSettings',
            'submenu' => 'userAccounts',
            'users' => $users,
        ));
    }
    // Approve Request
    public function approve_request($id)
    {
        // dd($id);
        $acctReq = AccountRequest::findOrFail($id);
        $acctReq->status = 'Approved';
        $acctReq->save();
        return back();
    }
    // Reject Request
    public function reject_request($id)
    {
        // dd($id);
        $acctReq = AccountRequest::findOrFail($id);
        $acctReq->status = 'Rejected';
        $acctReq->save();
        return back();
    }
}
