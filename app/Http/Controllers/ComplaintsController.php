<?php

namespace App\Http\Controllers;

use Google\Cloud\Firestore\FirestoreClient;
use App\Complaints;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.complaint.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   {

       $db = new FirestoreClient([
           'projectId' => "hello-firebase-2019001",
       ]);

       $data = [
            'title' => $request->get('title'),
            'type' => $request->get('type'),
            'longitude' => $request->get('longitude'),
            'latitude' => $request->get('latitude'),
        ];

        $addedDocRef = $db->collection('complaints')->add($data);

        $complaint = new Complaints();
        $complaint->title = $request->get('title');
        $complaint->type = $request->get('type');
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
