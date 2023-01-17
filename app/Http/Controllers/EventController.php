<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events =  Event::all();
        return $events;
    }
    
    public function show($id)
    {
        $events = Event::find($id);
        return $events;
    }
    public function destroy($id)
    {
        Event::find($id)->delete();
    }
    public function store(Request $request)
    {
        $Event = new Event();
        $Event->date = $request->date;
        $Event->max_number = $request->max_number;
        $Event->trade_id = $request->trade_id;
        $Event->status = $request->status;
        $Event->save();
    }

    public function update(Request $request, $id)
    {
        $Event = Event::find($id);
        $Event->date = $request->date;
        $Event->max_number = $request->max_number;
        $Event->trade_id = $request->trade_id;
        $Event->status = $request->status;
        $Event->save();
    }
}
