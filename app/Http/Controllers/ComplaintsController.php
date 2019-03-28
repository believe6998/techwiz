<?php

namespace App\Http\Controllers;
use App\Complaints;
use Illuminate\Http\Request;
use Auth;

class ComplaintsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
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
        return view("client.complaint.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $userid = Auth::user()->id;

        $complaint = new Complaints();
        $complaint->title = $request->get('title');
        $complaint->type = $request->get('type');
        $complaint->userid = $userid;
        $complaint->longitude = $request->get('longitude');
        $complaint->latitude = $request->get('latitude');
        $complaint->save();
        return $complaint;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Complaints  $complaints
     * @return \Illuminate\Http\Response
     */
    public function show(Complaints $complaints)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Complaints  $complaints
     * @return \Illuminate\Http\Response
     */
    public function edit(Complaints $complaints)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Complaints  $complaints
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complaints $complaints)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Complaints  $complaints
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complaints $complaints)
    {
        //
    }
}
