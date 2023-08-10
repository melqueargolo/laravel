<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{    
    /**
     * index
     *
     * @return View
     */
    public function index()
    {
        $search = request('search');

        if ($search) {
            $events = Event::where([
                ['title', 'like', '%' . $search . '%']
            ])->get();
        }else {
            $events = Event::all();
        }
    
        return view('layouts.home', [
            'events' => $events,
            'search' => $search
        ]);
    }

    public function create()
    {
        return View('events.create');
    }

    public function store(Request $request){
        $event = new Event;

        $event->title       = $request->title;
        $event->date        = $request->date;
        $event->city        = $request->city;
        $event->private     = $request->private;
        $event->description = $request->description;
        $event->items       = $request->items;

        //image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            
            $requestImage = $request->image;

            $extension = $requestImage->extension();    

            $imageName = md5($requestImage->getClientOriginalName() . \strtotime("now") . "." . $extension);

            $requestImage->move(\public_path('img/events'), $imageName);

            $event->image = $imageName;
        }
        $event->save();

        return \redirect('/')->with('msg', 'Evento criado com sucesso!')  ;
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show',[
            'event' => $event
        ]);
    }
}
