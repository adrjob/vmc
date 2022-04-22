<?php

namespace App\Http\Controllers;

use App\AddParticipant;
use App\Meetings;
use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();

        return view('members.index', compact('members'));
    }


    public function adminView($id)
    {
        $members = Member::where('user_id', $id)->get();

        return view('members.list', compact('members'));
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
        $data = new Member;

        $data->name = $request->name;
        $data->user_id = auth()->user()->id;

        if($data->save())
        {
            return redirect()->route('member.edit', $data->id);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $meetings = AddParticipant::where('m_member_id', $member->id)->get();

        return view('members.edit', compact('member', 'meetings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {

        $data = Member::find($member->id);

        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if($data->save())
        {
            return redirect()->back()->withStatus('Member has been updated');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->back()->withStatus('Member has been deleted');
    }
}
