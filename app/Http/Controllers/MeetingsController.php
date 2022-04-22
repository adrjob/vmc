<?php

namespace App\Http\Controllers;

use App\AddParticipant;
use App\Meetings;
use App\Member;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;

class MeetingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $meetings = Meetings::all();
        return view('meetings.index', compact('meetings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('meetings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $m_date = Carbon::parse($request->m_date)->format('Y-m-d H:i:s');


        $m_owner = auth()->user()->id;

        $data = new Meetings;

        $data->m_name = $request->m_name;
        $data->m_owner = $m_owner;
        $data->m_date = $m_date;



        if($data->save()) {
            return redirect()->route('meetings.index')->withStatus(__('Meeting successfully created.'));
        }



    }

    /**
     * Display the specified resource.
     *
     * @param Meetings $meetings
     * @return Response
     */
    public function show(Meetings $meeting)
    {
        $auth_all = auth()->user()->id;
        $members = Member::where('user_id', $auth_all)->get();
        $participants = AddParticipant::where('m_id', $meeting->id)->get();
        return view("meetings.show", compact("meeting", "members", "participants"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Meetings $meetings
     * @return Response
     */
    public function edit(Meetings $meeting)
    {
        return view('meetings.edit', compact('meeting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Meetings $meetings
     * @return Response
     */
    public function update(Request $request, Meetings $meeting)
    {
        $data = $meeting;

        $data->m_name = $request->m_name;
        $data->m_desc = $request->m_desc;
        $data->m_date = $request->m_date;

        if ($data->save()) {
            return redirect()->back()->withStatus(__('Meeting successfully updated.'));
        }
    }

    public function addP(Request $request)
    {
        $data = new AddParticipant;

        $data->m_id = $request->m_id;
        $data->m_member_id = $request->m_member_id;

        if ($data->save) {
            return redirect()->back()->withStatus(__('Participant successfully added.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Meetings $meetings
     * @return Response
     * @throws Exception
     */
    public function destroy(Meetings $meeting)
    {
        $meeting->delete();
        return redirect()->route('meetings.index')->withStatus(__('Meeting successfully deleted.'));
    }
}
