<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ticket');
    }

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'no_tlpn' => 'required',
            'jumlah' => 'required',
            'waktu' => 'required',
            'bangku' => 'required',
            'film' => 'required',
        ]);
        Ticket::create($validatedData);

        return redirect('/yourticket');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $ticket = Ticket::all();
        return view('yourticket', [
            'tickets' => $ticket
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::find($id);
        // dd($ticket->bangku);
        return view('edit', ['ticket'=>$ticket]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        // dd($id);
        Ticket::where('id', $ticket->id)->update($request->validate([
            'username' => 'required',
            'email' => 'required',
            'no_tlpn' => 'required',
            'jumlah' => 'required',
            'waktu' => 'required',
            'bangku' => 'required',
            'film' => 'required',
        ]));

        // $request->validate(([
        //     'username' => 'required',
        //     'email' => 'required',
        //     'no_tlpn' => 'required',
        //     'jumlah' => 'required',
        //     'waktu' => 'required',
        //     'bangku' => 'required',
        //     'film' => 'required',
        // ]));
        // dd($ticket->id);
        // $edit = Ticket::find($ticket->id);
        // $edit->username = $request->get('username');
        // $edit->email = $request->get('email');
        // $edit->no_tlpn = $request->get('no_tlpn');
        // $edit->jumlah = $request->get('jumlah');
        // $edit->waktu = $request->get('waktu');
        // $edit->bangku = $request->get('bangku');
        // $edit->film = $request->get('film');
        // $edit->update();
        
        return redirect('/yourticket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::destroy($id);
        return redirect('/yourticket');
    }
}
