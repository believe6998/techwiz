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

function doPostHelps(id) {

    navigator.geolocation.getCurrentPosition(showPosition);

    function showPosition(position) {
        db.collection("helps").add({
            longitude: position.coords.longitude,
            latitude: position.coords.latitude,
            userid: id,
            status: 0,
            time: new Date()
        }).then(function (docRef) {

        }).catch(function (error) {
            alert("Error adding document: ", error);
        });

        $.ajaxSetup({
            beforeSend: function() {
                $('#loadingDiv').show();
            },
            complete: function(){
                $('#loadingDiv').hide();
            },
            success: function() {}
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            'url': '/help',
            'method': 'POST',
            'data': {
                'latitude': position.coords.latitude,
                'longitude': position.coords.longitude
            },
            success: function (response) {
                alert("SOS Sened!");
            },
            error: function () {

            }
        });
    }
}



function doPostComplaints(id) {

    navigator.geolocation.getCurrentPosition(showPosition);

    function showPosition(position) {
        db.collection("complaints").add({
            latitude: position.coords.latitude,
            longitude: position.coords.longitude,
            title: $("#title").val(),
            type: $("#type").val(),
            userid: id,
            status: 0,
            time: new Date()
        }).then(function (docRef) {
            alert("Complaint Sended!")
        }).catch(function (error) {

        });

        $.ajaxSetup({
            beforeSend: function() {
                $('#loadingDiv').show();
            },
            complete: function(){
                $('#loadingDiv').hide();
            },
            success: function() {}
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            'url': '/complaints',
            'method': 'POST',
            'data': {
                'latitude': position.coords.latitude,
                'longitude': position.coords.longitude,
                'title': position.coords.longitude,
                'type': position.coords.longitude
            },
            success: function (response) {
            },
            error: function () {

            }
        });
    }

}

