@extends('layouts.app')

@section('content')

    <style>
        body {
            padding: 0;
            margin: 0;
        }

        #map {
            height: 92vh;
            width: 100%;
        }

        .floating-panel {
            position: absolute;
            top: 20px;
            left: 5%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto', 'sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }

        .floating-panel {
            margin-left: -52px;
        }
    </style>
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
    <div class="position-relative">
        <div class="floating-panel">
            <button>open form</button>
        </div>
        <div class="floating-panel" style="top:80px">
            <button><h2>SOS</h2></button>
        </div>
        <div id="map" style="height: 80vh">
        </div>
    </div>
    <script>
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

        function test(id) {
            db.collection("complaints").doc(id).delete().then(function () {
            }).catch(function (error) {
                console.error("Error removing document: ", error);
            });

            db.collection("helps").doc(id).delete().then(function () {
                alert("Document successfully deleted!" + id);
            }).catch(function (error) {
                console.error("Error removing document: ", error);
            });
        }

        function initMap() {
            // Map options

            var options = {
                zoom: 15,
                center: {lat: 21.0288722, lng: 105.7795577}
                ,
                mapTypeControl: true,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                    position: google.maps.ControlPosition.TOP_CENTER
                },
                zoomControl: true,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_BOTTOM
                },
                scaleControl: true,
                streetViewControl: true,
                streetViewControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_BOTTOM
                },
                fullscreenControl: true
            };

            var map = new google.maps.Map(document.getElementById('map'), options);

            var images = {
                jam:
                    {
                        url: 'http://maps.google.com/mapfiles/kml/shapes/caution.png',
                        scaledSize: new google.maps.Size(32, 32),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(0, 32)
                    },
                accident:
                    {
                        url: 'http://maps.google.com/mapfiles/kml/paddle/red-diamond.png',
                        scaledSize: new google.maps.Size(32, 32),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(0, 32)
                    },
                disaster:
                    {
                        url: 'http://maps.google.com/mapfiles/kml/shapes/firedept.png',
                        scaledSize: new google.maps.Size(32, 32),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(0, 32)
                    }
            };

            // Add Marker Function
            function addMarker(doc,id) {
                var marker = new google.maps.Marker({
                    position: {lat: parseFloat(doc.latitude), lng: parseFloat(doc.longitude)},
                    map: map,
                });
                // Check for customicon

                if (doc.type === "jam") {
                    marker.setIcon(images.jam);
                }else if(doc.type === "accident"){
                    marker.setIcon(images.accident)
                }else if(doc.type === "disaster"){
                    marker.setIcon(images.disaster)
                }else if(doc.type === undefined){
                    marker.setIcon({
                        url: 'http://www.jamiekatzpetdetective.com/stick_figure_help_button_500_clr_9911.gif',
                        scaledSize: new google.maps.Size(50, 50),
                        // origin: new google.maps.Point(0, 0),
                        // anchor: new google.maps.Point(0, 32)
                    })
                }

                var contentString = '<div id="content">' +
                    '<div id="siteNotice">' +
                    '</div>' +
                    '<h1>'+doc.title+'</h1>' +
                    '<div id="bodyContent">' +
                    '<button onclick="test(\'' + id + '\')">xoa</button>' +
                    '</button>' +
                    '</div>';
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker.addListener('click', function () {
                    infowindow.open(map, marker);
                });
            }

            db.collection("complaints").onSnapshot(function (querySnapshot) {
                querySnapshot.forEach(function (doc) {
                    addMarker(doc.data(),doc.id)
                });
            }, function (error) {
                console.log("loi" + error)
            });

            db.collection("helps").onSnapshot(function (querySnapshot) {
                querySnapshot.forEach(function (doc) {
                    addMarker(doc.data(),doc.id)
                });
            }, function (error) {
                console.log("loi" + error)
            });

        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZkhD8Q5_XkZEthioPUXM0_bYX3Lp56WI&callback=initMap">
    </script>


    {{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
    {{--<div class="col-md-8">--}}
    {{--<div class="card">--}}
    {{--<div class="card-header">Dashboard</div>--}}

    {{--<div class="card-body">--}}
    {{--@if (session('status'))--}}
    {{--<div class="alert alert-success" role="alert">--}}
    {{--{{ session('status') }}--}}
    {{--</div>--}}
    {{--@endif--}}

    {{--You are logged in!--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

@endsection
