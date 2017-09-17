<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Tickets;
class AdminController extends Controller
{
    public function staffTicketDetails()
    {
        return view('ticketdetails');
    }

    public function staffTicketList()
    {
        $ticket = Tickets::with('user', 'comments')->get();
        return view('staffTicketList')->with('ticketlist' , $ticket);
    }
    
    public function updateTicketList(Request $request)
    {
        $this->validate($request, [
            'ticket_id' => 'required|exists:ticket,ticket_id',
            'status' => 'required|in:PENDING,IN PROGRESS,UNRESOLVED,RESOLVED'
        ]);
        $status = $request->input('status');
        $ticket_id = $request->input('ticket_id');
        $ticket = Tickets::find($ticket_id);
        $ticket->ticket_status = $status;
        $ticket->save();
        return redirect('/staffticketlist');
    }
    //
}
