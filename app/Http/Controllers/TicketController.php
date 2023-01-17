<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets =  Ticket::all();
        return $tickets;
    }

    public function show($event_id, $user_id, $status)
    {
        $ticket = Ticket::where('event_id', $event_id)->where('user_id', $user_id)->where('status', $status)->get();
        return $ticket[0];
    }
    public function destroy($id)
    {
        Ticket::find($id)->delete();
    }
    public function store(Request $request)
    {
        $Ticket = new Ticket();
        $Ticket->event_id = $request->event_id;
        $Ticket->user_id = $request->user_id;
        $Ticket->status = $request->status;
        $Ticket->save();
    }

    public function update(Request $request, $id)
    {
        $Ticket = Ticket::find($id);
        $Ticket->event_id = $request->event_id;
        $Ticket->user_id = $request->user_id;
        $Ticket->status = $request->status;
        $Ticket->save();
    }
    public function newView()
    {
        $users = User::all();
        return view('ticket.new', ['users' => $users]);
    }
    public function editView($id)
    {
        $users = User::all();
        $ticket = Ticket::find($id);
        return view('ticket.edit', ['users' => $users, 'ticket' => $ticket]);
    }
    public function listView(){
        $tickets = Ticket::all();
        return view('ticket.list', ['tickets' => $tickets]);
    }
}
