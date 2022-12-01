<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\AccountRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Notifications\ApproverNotif;
use Illuminate\Support\Facades\Hash;
use App\Notifications\RequestorNotif;
use App\Notifications\ApprovedRequest;
use RealRashid\SweetAlert\Facades\Alert;

class AccountRequestController extends Controller
{
    // Account Request Index
    public function accountRequest()
    {
        $acctRequests = AccountRequest::where('status', '!=', 'Rejected')->get();
        $roles = Role::all();
        // dd($acctRequests);
        return view('account_requests.index', array(
            'header' => 'accountSettings',
            'submenu' => 'accountRequest',
            'roles' => $roles,
            'acctRequests' => $acctRequests,
        ));
    }
    public function request_account(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'user_email' => 'email|required|unique:account_requests,email|unique:users,email',
            'name' => 'required',
        ]);

        $accountRequest = new AccountRequest;
        $accountRequest->email = $request->user_email;
        $accountRequest->name = $request->name;
        $accountRequest->message = $request->message;
        $accountRequest->status = 'Pending';
        $accountRequest->save();

        $acctReqDetails = AccountRequest::where('id', $accountRequest->id)->first();
        // dd($acctReqDetails);

        // Notify requestor
        $accountRequest->notify(new RequestorNotif($accountRequest));

        // Notify Appover
        $acctReqApproval = User::where('role_id', '1')->first();
        // dd($acctReqApproval);
        $acctReqApproval->notify(new ApproverNotif($acctReqDetails));


        Alert::success('Request Sent', 'Successfully Sent, Please wait for an email for your credentials')->persistent('Dismiss');
        return back();
    }
    // Approve Request
    public function approve_request(Request $request, $id)
    {

        $acctReq = AccountRequest::findOrFail($id);
        $acctReq->status = 'Approved';
        $acctReq->update();

        $randomPassword = Str::random(10);
        $user = new User;
        $user->name = $acctReq->name;
        $user->email = $acctReq->email;
        $user->password = bcrypt($randomPassword);
        $user->role_id = $request->role;
        $user->status = 1;
        $user->profile_picture = asset('assets/img/avatar/no-user-image.png');
        $user->save();

        $acctReq->notify(new ApprovedRequest($acctReq, $randomPassword));

        Alert::success('Successfully Approved')->persistent('Dismiss');
        return back();
    }
    // Reject Request
    public function reject_request($id)
    {
        // dd($id);
        $acctReq = AccountRequest::findOrFail($id);
        $acctReq->status = 'Rejected';
        $acctReq->update();
        return back();
    }
}
