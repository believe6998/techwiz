@extends('layouts.app')
@section('content')
    <div>
        <form>
            Title <input id="title" type="text" name="title">
            <br>
            <select id="type" name="type" >
                <option value="jam">Tac duong</option>
                <option value="accident">Tai nan</option>
                <option value="disaster">Thien tai</option>
            </select>
            <input type="hidden" name="longitude">
            <input type="hidden" name="latitude">
            <input onclick="doPostComplaints({{ Auth::user()->id }})"  type="button" value="Submit">
        </form>
        <br>
        <br>
        <br>
        <br>
        <div>
            <button onclick="doPostHelps({{ Auth::user()->id }})">
                SOS
            </button>
        </div>
    </div>
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@endsection
