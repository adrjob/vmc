<?php

namespace App\Http\Controllers;

use App\AddParticipant;
use App\Member;
use App\User;
use Illuminate\Http\Request;

class AddParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $participant = Member::where('id', $request->m_member_id)->first();
        $sponsor = User::where('id', $participant->user_id)->first();

        $data = new AddParticipant;

        $data->m_id = $request->m_id;
        $data->m_member_id = $request->m_member_id;
        $data->name = $participant->name;
        $data->sponsor = $sponsor->name;

        if ($data->save()) {
            return redirect()->back()->withStatus(__('Participant successfully added.'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AddParticipant  $addParticipant
     * @return \Illuminate\Http\Response
     */
    public function show(AddParticipant $addParticipant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AddParticipant  $addParticipant
     * @return \Illuminate\Http\Response
     */
    public function edit(AddParticipant $addParticipant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AddParticipant  $addParticipant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddParticipant $addParticipant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AddParticipant  $addParticipant
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddParticipant $addParticipant)
    {
        //
    }
}
