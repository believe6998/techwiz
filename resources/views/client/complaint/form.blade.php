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
    <script>
        // Cấu Hình filebase
        var config = {
            apiKey: "AIzaSyB6EvN5u7zMqsylmoqh2lX_EsFMrV1cqm8",
            authDomain: "hello-firebase-2019001.firebaseapp.com",
            databaseURL: "https://hello-firebase-2019001.firebaseio.com",
            projectId: "hello-firebase-2019001",
            storageBucket: "hello-firebase-2019001.appspot.com",
            messagingSenderId: "463492007629"
        };
        firebase.initializeApp(config);
        var db = firebase.firestore();

        function doPostHelps(id){

            navigator.geolocation.getCurrentPosition(showPosition);
            function showPosition(position) {
                db.collection("helps").add({
                    longitude: position.coords.longitude,
                    latitude: position.coords.latitude,
                    userid: id,
                    status:0
                }).then(function(docRef) {
                }).catch(function(error) {
                });

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    'url': '/help',
                    'method': 'POST',
                    'data':{
                        'latitude':position.coords.latitude,
                        'longitude':position.coords.longitude
                    },
                    success: function (response) {
                    },
                    error: function () {
                    }
                });
            }
        }

        function doPostComplaints(id){

            navigator.geolocation.getCurrentPosition(showPosition);
            function showPosition(position) {
                db.collection("complaints").add({
                    latitude: position.coords.latitude,
                    longitude: position.coords.longitude,
                    title: $("#title").val(),
                    type: $("#type").val(),
                    userid: id,
                    status:0
                }).then(function(docRef) {
                }).catch(function(error) {
                });

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    'url': '/complaints',
                    'method': 'POST',
                    'data':{
                        'latitude':position.coords.latitude,
                        'longitude':position.coords.longitude,
                        'title':position.coords.longitude,
                        'type':position.coords.longitude
                    },
                    success: function (response) {
                    },
                    error: function () {
                    }
                });
            }
        }

    </script>
@endsection
