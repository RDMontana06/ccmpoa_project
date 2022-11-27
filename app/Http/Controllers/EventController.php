<?php

namespace App\Http\Controllers;

use App\User;
use App\Event;
use Carbon\Carbon;
use App\EventAttachment;
use App\EventParticipant;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Foundation\Console\Presets\React;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('user_event', 'participant.user', 'user')
            ->where('status', 'Active')
            ->get();
        
        return view('events.index', array(
            'header' => 'eventSettings',
            'events' => $events,
            // 'countUserEvent' => $countUserEvent,
        ));
    }
    public function event_details($id){

        $event = Event::with('participant.user')->findOrFail($id);
         $eventUser = EventParticipant::where('user_id', auth()->user()->id)->where('event_id', $id)->first();
        //   dd($event);
        return view('events.event-details', array(
            'header' => 'eventSettings',
            'event' => $event,
            'eventUser' => $eventUser,
        ));
    }
    public function admin_event()
    {
        $events = Event::with('attachment')->get();
        return view('admin_events.index', array(
            'header' => 'eventSettings',
            'submenu' => 'event',
            'events' => $events,
        ));
    }
    public function store_events(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'expiry_date' => 'required|date|after_or_equal:date',
            'address' => 'required',
            'organizer_name' => 'required',
            'organizer_email' => 'required|email',
            'organizer_number' => 'required',
            // 'organizer_website' => 'url',
            'cover_photo' => 'mimes:jpeg,jpg,png,gif|max:2048'
        ], [
            'cover_photo.max' => 'Sorry! Maximum allowed size for an image is 2MB',
        ]);

        // dd($request->all());
        $events = new Event();
        $events->name = $request->name;
        $events->description = $request->description;
        $events->date = $request->date;
        $events->expiration_date = $request->expiry_date;
        $events->address = $request->address;
        $events->organizer = $request->organizer_name;
        $events->organizer_email = $request->organizer_email;
        $events->organizer_website = $request->organizer_website;
        $events->organizer_number = $request->organizer_number;
        $events->status = 'Active';
        $events->encoded_by = auth()->user()->id;
    
        // Save Single Image
        
        if ($request->file('cover_photo')) {
            $attachment = $request->file('cover_photo');
            $original_name = $attachment->getClientOriginalName();
            $name = time() . '_' . $attachment->getClientOriginalName();
            $attachment->move(public_path() . '/event-files/', $name);
            $file_name = '/event-files/' . $name;
            $events->cover_photo = $file_name;
        }
        $events->save();

        //Save Multiple File
        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $path = $file->getClientOriginalName();
                $name = time() . '-' . $path;
                $attachment = new EventAttachment();
                $file->move(public_path() . '/event-files/', $name);
                $file_name = '/event-files/' . $name;
                $attachment->file_name = $file_name;
                $attachment->event_id = $events->id;
                $attachment->save();
            }
        }
        // if ($request->hasFile('file')) {
        //     foreach ($request->file('file') as $file) {
        //         $path = $file->getClientOriginalName();
        //         $name = time() . '-' . $path;
        //         $attachment = new EventAttachment();
        //         $file->move(public_path() . '/event-files/', $name);
        //         $file_name = '/event-files/' . $name;
        //         $attachment->file_name = $file_name;
        //         $attachment->event_id = $events->id;
        //         $attachment->save();
        //     }
        // }

        

        Alert::success('Successfully Store', 'Event created successfully!')->persistent('Dismiss');
        return back();
    }
    public function leave_events($id){
        $events = EventParticipant::where('event_id', $id)->where('user_id', auth()->user()->id)->first();
        $events->delete();
        return back();  

    }
    public function update_events(Request $request, $id)
    {

        //   dd($id, $request->all());
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required|max:255',
            'date' => 'required|date',
            'expiry_date' => 'required|date|after_or_equal:date',
            'address' => 'required',
            'organizer_name' => 'required',
            'organizer_email' => 'required|email',
            'organizer_number' => 'required',
            // 'organizer_website' => 'url',
            'cover_photo' => 'mimes:jpeg,jpg,png,gif|max:2048'
        ], [
            'cover_photo.max' => 'Sorry! Maximum allowed size for an image is 2MB',
        ]);

        $events = Event::findOrFail($id);
        $events->name = $request->name;
        $events->description = $request->description;
        $events->date = $request->date;
        $events->expiration_date = $request->expiry_date;
        $events->address = $request->address;
        $events->organizer = $request->organizer_name;
        $events->organizer_email = $request->organizer_email;
        $events->organizer_website = $request->organizer_website;
        $events->organizer_number = $request->organizer_number;
        $events->status = 'Active';
        $events->encoded_by = auth()->user()->id;
        

            // Save Single Image
            if ($request->file('cover_photo')) {
                $attachment = $request->file('cover_photo');
                $original_name = $attachment->getClientOriginalName();
                $name = time() . '_' . $attachment->getClientOriginalName();
                $attachment->move(public_path() . '/event-files/', $name);
                $file_name = '/event-files/' . $name;
                $events->cover_photo = $file_name;
            }
       
        $events->save();

        // if ($request->filesAttach == null) {
        //     $attachments = EventAttachment::where('event_id', $id)->get();
        // }else{
        //     $attachments = EventAttachment::where('event_id', $id)->whereNotIn('id', $request->filesAttach)->get();
        // }
        // foreach ($attachments as $attach) {
        //     $attach->delete();
        // }  
        // if ($request->hasFile('file')) {
        //     foreach ($request->file('file') as $file) {
        //         $path = $file->getClientOriginalName();
        //         $name = time() . '-' . $path;
        //         $attachment = new EventAttachment();
        //         $file->move(public_path() . '/event-files/', $name);
        //         $file_name = '/event-files/' . $name;
        //         $attachment->file_name = $file_name;
        //         $attachment->event_id = $events->id;
        //         $attachment->save();
        //     }
        // }
        


        Alert::success('Successfully Updated', 'Event update successfully!')->persistent('Dismiss');
        return back();
    }
   public function cancel_events($id){
    Event::Where('id', $id)->update(['status' => 'Cancelled']);
    // Alert::success('Event Cancelled', 'Event was cancelled successfully!')->persistent('Dismiss');
    return back();
   }
   public function register_events($id){
    
    $eventParticipants = new EventParticipant;
    $eventParticipants->event_id = $id;
    $eventParticipants->user_id = auth()->user()->id;
    $eventParticipants->save();

    return back();

   }
}
