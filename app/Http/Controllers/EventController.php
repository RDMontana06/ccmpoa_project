<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventAttachment;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('user_event')
            ->where('status', 'Active')
            ->get();
        // $countUserEvent = Event::with('user_event')->get();
        return view('events.index', array(
            'header' => 'eventSettings',
            'events' => $events,
            // 'countUserEvent' => $countUserEvent,
        ));
    }
    public function admin_event()
    {
        $events = Event::with('attachment')->get();
        // dd($events);
        return view('admin_events.index', array(
            'header' => 'eventSettings',
            'submenu' => 'event',
            'events' => $events,
        ));
    }
    public function store_events(Request $request)
    {
        // 
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required|max:255',
            'date' => 'required|date',
            'expiry_date' => 'required|date|after_or_equal:date',
            'address' => 'required',
            'organizer_name' => 'required',
            'organizer_email' => 'required|email',
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
        $events->status = 'Active';
        $events->encoded_by = auth()->user()->id;
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


        Alert::success('Successfully Store', 'Event created successfully!')->persistent('Dismiss');
        return back();
    }
    public function update_events(Request $request, $id)
    {

        // dd($id, $request->all());
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required|max:255',
            'date' => 'required|date',
            'expiry_date' => 'required|date|after_or_equal:date',
            'address' => 'required',
            'organizer_name' => 'required',
            'organizer_email' => 'required|email',
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
        $events->status = 'Active';
        $events->encoded_by = auth()->user()->id;
        $events->save();


        Alert::success('Successfully Updated', 'Event update successfully!')->persistent('Dismiss');
        return back();
    }
}
