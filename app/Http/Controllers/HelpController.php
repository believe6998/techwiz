<?php

namespace App\Http\Controllers;

use App\Help;
use Illuminate\Http\Request;
use Google\Cloud\Firestore\FirestoreClient;
use Auth;

class HelpController extends Controller
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
        $userid = Auth::user()->id;
//
//        $db = new FirestoreClient([
//            'projectId' => "hello-firebase-2019001",
//        ]);
//
//        $data = [
//            'userid' => $userid,
//            'longitude' => $request->get('longitude'),
//            'latitude' => $request->get('latitude'),
//            'status' => 0,
//        ];
//
//        $addedDocRef = $db->collection('helps')->add($data);

        $help = new Help();
        $help->userid = $userid;
        $help->longitude = $request->get('longitude');
        $help->latitude = $request->get('latitude');
        $help->save();
        return $userid;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function show(Help $help)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function edit(Help $help)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Help $help)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function destroy(Help $help)
    {
        //
    }
}
