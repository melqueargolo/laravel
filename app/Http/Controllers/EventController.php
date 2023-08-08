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
        $events = Event::all();
    
        return view('layouts.home', [
            'events' => $events
        ]);
    }

    public function create()
    {
        return View('events.create');
    }
}
