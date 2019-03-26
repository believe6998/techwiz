<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Google Map</title>
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        #header {
            height: 8vh;
        }

        #map {
            height: 92vh;
            width: 100%;
        }
    </style>
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
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
    </script>
</head>
<body>
<div id="header" style="background: aqua">

</div>
<div id="map">
</div>
<script>


    function initMap() {
        // Map options
        var options = {
            zoom: 15,
            center: {lat: 21.0288722, lng: 105.7795577}
        };

        // New map
        var map = new google.maps.Map(document.getElementById('map'), options);

        // Listen for click on map
        // google.maps.event.addListener(map, 'click', function (event) {
        //     // Add marker
        //     addMarker({coords: event.latLng});
        // });

        var images = {
            jam:
                {
                    url: 'http://maps.google.com/mapfiles/kml/shapes/caution.png',
                    // This marker is 20 pixels wide by 32 pixels high.
                    scaledSize: new google.maps.Size(32, 32),
                    // The origin for this image is (0, 0).
                    origin: new google.maps.Point(0, 0),
                    // The anchor for this image is the base of the flagpole at (0, 32).
                    anchor: new google.maps.Point(0, 32)
                },
            accident:
                {
                    url: 'http://maps.google.com/mapfiles/kml/paddle/red-diamond.png',
                    // This marker is 20 pixels wide by 32 pixels high.
                    scaledSize: new google.maps.Size(32, 32),
                    // The origin for this image is (0, 0).
                    origin: new google.maps.Point(0, 0),
                    // The anchor for this image is the base of the flagpole at (0, 32).
                    anchor: new google.maps.Point(0, 32)
                },
            disaster:
                {
                    url: 'http://maps.google.com/mapfiles/kml/shapes/firedept.png',
                    // This marker is 20 pixels wide by 32 pixels high.
                    scaledSize: new google.maps.Size(32, 32),
                    // The origin for this image is (0, 0).
                    origin: new google.maps.Point(0, 0),
                    // The anchor for this image is the base of the flagpole at (0, 32).
                    anchor: new google.maps.Point(0, 32)
                }

        };

        // Loop through markers
        // for (var i = 0; i < markers.length; i++) {
        //     // Add marker
        //     addMarker(markers[i]);
        // }

        // Add Marker Function
        function addMarker(props) {
            var marker = new google.maps.Marker({
                position: props.coords,
                map: map,
                //icon:props.iconImage
            });

            // Check for customicon
            if (props.iconImage) {
                // Set icon image
                marker.setIcon(props.iconImage);
            }

            // Check content
            if (props.content) {
                var infoWindow = new google.maps.InfoWindow({
                    content: props.content
                });
            }

            var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
                '<div id="bodyContent">'+
                '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
                'sandstone rock formation in the southern part of the '+
                'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
                'south west of the nearest large town, Alice Springs; 450&#160;km '+
                '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
                'features of the Uluru - Kata Tjuta National Park. Uluru is '+
                'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
                'Aboriginal people of the area. It has many springs, waterholes, '+
                'rock caves and ancient paintings. Uluru is listed as a World '+
                'Heritage Site.</p>'+
                '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
                'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
                '(last visited June 22, 2009).</p>'+
                '</div>'+
                '</div>';


            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });

        }

        db.collection("complaints").onSnapshot(function (querySnapshot) {
            querySnapshot.forEach(function (doc) {
                // doc.data() is never undefined for query doc snapshots
                console.log(doc.data().latitude);
                var image;
                if(doc.data().type === "jam"){
                    image = images.jam
                }else if(doc.data().type === "accident") {
                    image = images.accident
                } else if(doc.data().type === "disaster"){
                    image = images.disaster
                }

                addMarker({
                    coords: {lat: doc.data().latitude, lng: doc.data().longitude},
                    iconImage: image,
                    content: '<h1>' + doc.data().problemTitle + '</h1>'
                })
            });
        }, function (error) {
            console.log("loi")
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZkhD8Q5_XkZEthioPUXM0_bYX3Lp56WI&callback=initMap">
</script>
</body>
</html>
