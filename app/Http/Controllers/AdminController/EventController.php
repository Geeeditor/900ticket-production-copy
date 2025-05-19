<?php

namespace App\Http\Controllers\AdminController;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventController extends Controller
{
    //


    public function create() {
        return view('admin.pages.900Events.create');
    }

    public function store(Request $request, Event $event) {

        // Checking if user is a usertype of admin before requesting or validating a data
        $data = $request->validate(
            [
                'title' => ['required', 'max:225'],
                'date' => ['required', 'date'],
                'time' => 'required|date_format:H:i',
                'location' => ['required', 'max:225'],
                'description' => ['required'],
                'hero_image' => ['required' ,'image', 'max:2048'],
                'map_link' => ['required','url'],
                'regular_ticket_price' => ['numeric', 'between:0,99999999.99'],
                'vip_ticket_price' => ['numeric', 'between:0,999999.99'],
                'vvip_ticket_price' => ['numeric', 'between:0,999999.99'],
                // 'ticket_passcode' => ['required', 'string', 'max:255', 'unique:events,ticket_passcode'],
                'ticket_passcode' => ['required', 'string', 'max:255'],
            ]
            );

        // dd($data);

        if (Auth::user()->usertype === 'admin') {


            if ($request->hasFile('hero_image')) {
                $heroImage = $request->file('hero_image');
                $heroImagePath = 'events/' . time() . '_' . $heroImage->getClientOriginalName();
                Storage::disk('public')->put($heroImagePath,file_get_contents($heroImage));
            }
            // dd('Event Validated');
            $admin = Auth::user(); //  using Laravel's authentication



            $eventRef = '900Tickets/event/' . Str::random(4) . substr(time(), 6,8) . Str::random(4);

                // Create the event with the associated admin
                $event = $admin->events()->create([
                    'title' => $request->title,
                    'date' => $request->date,
                    'time' => $request->time,
                    'location' => $request->location,
                    'description' => $request->description,
                    'hero_image' => $heroImagePath, // Save the path to the image
                    'map_link' => $request->map_link,
                    'regular_ticket_price' => $request->regular_ticket_price == 0 ? null : $request->regular_ticket_price  ,
                    'vip_ticket_price' => $request->vip_ticket_price == 0 ? null :  $request->vip_ticket_price  ,
                    'vvip_ticket_price' => $request->vvip_ticket_price == 0 ? null : $request->vvip_ticket_price  ,
                    'event_reference' => $eventRef,
                    'ticket_passcode' => $request->ticket_passcode,
                ]);

                return redirect()->route('admin.events')->with('success', 'Party Ticket updated successfully');


            } else {
        // If the user is not an admin, you can redirect them back or show an error message
                return redirect()->back()->with('error', 'Opps!!!  You do not have permission to create events');
            }

    }

    public function editEventList(){
        return redirect()->route('admin.events')->with('message', 'Click the edit icon to edit an Event');
    }

    public function view(Event $event) {
        $event = Event::latest()->get();
        return view('admin.pages.900Events.view', ['events' => $event]);
    }

    public function show(Event $event, $id) {
        $event = Event::find($id);

        return view('admin.pages.900Events.show', ['event' => $event]);
    }

    public function edit(Event $event, $id) {

        $event = Event::find($id);

        return view('admin.pages.900Events.edit', ['event' => $event]);
    }

    public function update(Request $request, $eventId) {
    // Checking if the authenticated user is of type 'admin'
    if (Auth::user()->usertype == 'admin') {
        $event = Event::findOrFail($eventId);
        $data = $request->validate([
            'title' => ['required', 'max:225'],
                'date' => ['required', 'date'],
                'time' => 'required',
                'location' => ['required', 'max:225'],
                'description' => ['required'],
                'hero_image' => ['nullable' ,'image', 'max:2048'],
                'map_link' => ['required','url'],
                'regular_ticket_price' => ['numeric', 'between:0,99999999.99'],
                'vip_ticket_price' => ['numeric', 'between:0,999999.99'],
                'vvip_ticket_price' => ['numeric', 'between:0,999999.99'],

            ]
        );

        $updatableData = [
            'title' => $data['title'],
            'date' => $data['date'],
            'time' => $data['time'],
            'location' => $data['location'],
            'description' => $data['description'],
            'map_link' => $data['map_link'],
            'regular_ticket_price' => $data['regular_ticket_price'] == 0 ? null : $data['regular_ticket_price'],
            'vip_ticket_price' => $data['vip_ticket_price'] == 0 ? null : $data['vip_ticket_price'],
            'vvip_ticket_price' => $data['vvip_ticket_price'] == 0 ? null : $data['vvip_ticket_price'],

        ];

        // // Check if a new hero image is uploaded
        if ($request->hasFile('hero_image')) {
            $heroImage = $request->file('hero_image');
            $heroImagePath = 'events/' . time() . '_' . $heroImage->getClientOriginalName();
            Storage::disk('public')->put($heroImagePath, file_get_contents($heroImage));
            $updatableData['hero_image'] = $heroImagePath; // Update the hero image path
        } else {
            // If no new image is uploaded, keep the existing one
            $updatableData['hero_image'] = $event->hero_image;
        }



        // $updatableData->update();
        // Update the event with the new data
        $event->update($updatableData);
        return redirect()->route('admin.events')->with('success', 'Party Ticket updated successfully');
        // Find the event by ID
    } else {
        // If the user is not an admin, show an error message
        return redirect()->back()->with('error', 'Oops! You do not have permission to update events');
    }

    // dd('hello');
}

public function destroy (Request $request, $id) {
    // Checking if the authenticated user is of type 'admin'
    if (Auth::user()->usertype == 'admin') {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->back()->with('success', 'Event deleted successfully');
    } else {
        return redirect()->back()->with('error', 'Oops! You do not have permission to delete events');
    }
}

}
