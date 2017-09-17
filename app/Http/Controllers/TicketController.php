<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tickets;
use App\Comments;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['showTicket', 'ticketList']);
    }
    public function formTicket()
    {
        return view('submitrequest');
    }
    
    public function trackTicket()
    {
        return view('trackticket');
    }

    public function findTicket(Request $request)
    {
        $this->validate($request, [
            'search' => 'required|exists:ticket,display_id'
        ]);
        $search = $request->input('search');
        $ticketSummary = Tickets::with('user', 'comments')->where('display_id', $search)->first();
        return view('ticketdetails')->with('ticketSummary', $ticketSummary);
    }

    public function ticketSummary()
    {
        return view('ticketsummary');
    }

    public function ticketDetails()
    {
        $ticket_id = session('last_ticket_id');
        $ticket = Tickets::with('user', 'comments')->find($ticket_id);
        return view('ticketdetails')->with('ticketSummary' , $ticket);
    }
    
    //view ticket api
    public function showTicket(Request $request, $ticket_id){
        // $ticket_id = $request->input('ticket_id');  
        $ticket = Tickets::with('user', 'comments')->find($ticket_id);
        return $ticket ? $ticket : "Ticket not found";
    }

    public function ticketList(){
        $ticket = Tickets::with('user', 'comments')->get();
        return $ticket;
    }

    public function ticketComments(Request $request)
    {
        $this->validate($request, [
            'ticket_id' => 'required|exists:ticket,ticket_id',
            'email' => 'required|email|min:5|max:149',
            'message' => 'required|min:10|string'
        ]);
        $email = $request->input('email');
        $message = $request->input('message');
        $ticket_id =$request->input('ticket_id');
        $comments = new Comments;
        $comments->comments_description = $message;
        $comments->email = $email;
        
        $ticket = Tickets::find($ticket_id);

        $comments->ticket()->associate($ticket);

        $user = Auth::user();
        $comments->user()->associate($user);
        $comments->save();
        session([
            'last_ticket_id' => $ticket_id
        ]);
        return redirect('/ticketdetails');
    }

    public function ticket(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|min:3|string',
            'last_name' => 'required|min:2|string',
            'email' => 'required|email|min:5|max:149',
            'os_info' => 'required|in:Windows,OS X,Linux,Ubuntu,Debian',
            'software_issue' => 'required|min:5|string',
            'description' => 'required|min:10|string'
        ]);

        $email = $request->input('email');
        $user = Auth::user();
        $ticket = new Tickets;
        $ticket->os_info = $request->input('os_info');
        $ticket->description = $request->input('description');
        $ticket->software_issue = $request->input('software_issue');
        $ticket->ticket_status = 'PENDING';
        $ticket->display_id = $user->last_name . '='.$user->user_id;
        $ticket->user()->associate($user);
        $ticket->save();
        $ticket->display_id = $ticket->ticket_id . '-' . $user->last_name;
        $ticket->save();
        session([
            'last_ticket_id' => $ticket->ticket_id
        ]);
        return redirect('/ticketsummary');

    }
}
