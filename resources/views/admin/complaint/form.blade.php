@extends('layout.admin-master')
@section('content')
    <button id="open-form">Open Form </button>
    <form id="formSubmitProblemTraffic" action="/admin/complaints" method="post">
        @csrf
        Title <input type="text" name="title">
        <br>
        <select name="type" >
            <option value="jam">Tac duong</option>
            <option value="accident">Tai nan</option>
            <option value="disaster">Thien tai</option>
        </select>
        <input type="hidden" name="longitude">
        <input type="hidden" name="latitude">
        <input id="buttonDo" type="submit" value="Submit">
    </form>
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

        $("#open-form").click(function () {
            navigator.geolocation.getCurrentPosition(showPosition);
            function showPosition(position) {
                $("input[name='longitude']").val(position.coords.longitude);
                $("input[name='latitude']").val(position.coords.latitude);
                alert ($("input[name='longitude']").val());
            }
        });


        // $("#buttonDo").click(function () {
        //     db.collection("complaints").add({
        //         title: $("input[name='title']").val(),
        //         type: $("select[name='type']").val(),
        //         longitude: $("input[name='longitude']").val(),
        //         latitude: $("input[name='latitude']").val(),
        //     }).then(function(docRef) {
        //         console.log("Problem written with ID: ", docRef.id);
        //     })
        //         .catch(function(error) {
        //             console.error("Error adding problem: ", error);
        //         });
        // });


    </script>
@endsection
