@extends('layouts.app',['page_title'=>'Smart Traffic'])

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
    </style>

    <div id="map" style="height: 80vh">
    </div>

    <script>

        var markerMap = {};

        function deleteMarker(id) {
            db.collection("complaints").doc(id).delete().then(function () {
            }).catch(function (error) {
                console.error("Error removing document: ", error);
            });

            db.collection("helps").doc(id).delete().then(function () {
                alert("Document successfully deleted!" + id);
            }).catch(function (error) {
                console.error("Error removing document: ", error);
            });

            markerMap[id].setMap(null)

        }
        var map;
        function initMap() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                    map.setCenter(initialLocation);
                });
            }
            // Map options
            var styleArray = [
                {
                    "featureType": "poi",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                }
            ];

            var options = {
                zoom: 15,
                minZoom: 13,
                styles: styleArray,
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
            map = new google.maps.Map(document.getElementById('map'), options);

            var images = {
                jam:
                    {
                        url: 'https://www.tycoifs.ca/wps/wcm/connect/61557331-2b17-4237-a6fe-e77ecdf8dbbb/pulse12.gif?MOD=AJPERES&CACHEID=ROOTWORKSPACE-61557331-2b17-4237-a6fe-e77ecdf8dbbb-kNcW.Bt',
                        scaledSize: new google.maps.Size(70, 70),
                        origin: new google.maps.Point(0, 0),
                        // anchor: new google.maps.Point(0, 32)
                    },
                accident:
                    {
                        url: 'https://hotelmarkovo.bg/en/wp-content/uploads/2018/05/hotelmarkovogreenpulse.gif',
                        scaledSize: new google.maps.Size(70, 70),
                        origin: new google.maps.Point(0, 0),
                        // anchor: new google.maps.Point(0, 32)
                    },
                disaster:
                    {
                        url: 'https://iwant2study.org/lookangejss/01_measurement/ejss_model_horizontalverticalquiz01/horizontalvertical/giphy.gif',
                        scaledSize: new google.maps.Size(70, 70),
                        origin: new google.maps.Point(0, 0),
                        // anchor: new google.maps.Point(0, 32)
                    }
            };

            // Add Marker Function
            function addMarker(doc, id, help) {

                var marker = new google.maps.Marker({
                    position: {lat: parseFloat(doc.latitude), lng: parseFloat(doc.longitude)},
                    map: map,
                    help: help
                });

                markerMap[id] = marker;

                // Check for customicon

                if (doc.type === "jam") {
                    marker.setIcon(images.jam);
                } else if (doc.type === "accident") {
                    marker.setIcon(images.accident)
                } else if (doc.type === "disaster") {
                    marker.setIcon(images.disaster)
                } else if (doc.type === undefined) {
                    marker.setIcon({
                        url: 'http://www.jamiekatzpetdetective.com/stick_figure_help_button_500_clr_9911.gif',
                        scaledSize: new google.maps.Size(50, 50),
                        // origin: new google.maps.Point(0, 0),
                        // anchor: new google.maps.Point(0, 32)
                    })
                }
                if (!help) {
                    var contentString =
                        '<div id="content">' +
                        '<h3>' + doc.type + '</h3>' +
                        '<h6>' + doc.title + '</h6>' +
                        '<span>' +  moment(doc.time.toDate()).fromNow() + '</span>' +
                        '</div>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    marker.addListener('click', function () {
                        infowindow.open(map, marker);
                    });
                }


            }

            db.collection("complaints").onSnapshot(function (querySnapshot) {
                querySnapshot.forEach(function (doc) {
                    addMarker(doc.data(), doc.id, false)
                });
            }, function (error) {
                console.log("loi" + error)
            });

            db.collection("helps").onSnapshot(function (querySnapshot) {
                querySnapshot.forEach(function (doc) {
                    addMarker(doc.data(), doc.id, true)
                });
            }, function (error) {
                console.log("loi" + error)
            });

        }

        // });

    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZkhD8Q5_XkZEthioPUXM0_bYX3Lp56WI&callback=initMap">
    </script>
    <!-- *** Choose Us Area Start *** -->
    <section class="rehomes-choose-us-area section-padding-100-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="200ms">
                        <h2><span>Why</span> Choose Us?</h2>
                        <p>A traffic app helps and answers your questions wherever you are.</p>
                    </div>
                </div>

                <!-- Single choose us content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-choose-us-content wow fadeInUp" data-wow-delay="200ms">
                        <!-- Choose us Icon -->
                        <div class="choose-us-icon">
                            <i class="icon_map"></i>
                        </div>
                        <h5>Fastest Update</h5>
                        <p>Update traffic situation as well as traffic problems in the city in the fastest way.</p>
                    </div>
                </div>

                <!-- Single choose us content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-choose-us-content wow fadeInUp" data-wow-delay="200ms">
                        <!-- Choose us Icon -->
                        <div class="choose-us-icon">
                            <i class="icon_building"></i>
                        </div>
                        <h5>Transportation support</h5>
                        <p>Help and answer your complaints about traffic where you live or where you go. </p>
                    </div>
                </div>

                <!-- Single choose us content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-choose-us-content wow fadeInUp" data-wow-delay="200ms">
                        <!-- Choose us Icon -->
                        <div class="choose-us-icon">
                            <i class="icon_creditcard"></i>
                        </div>
                        <h5>Save Your Money And Time</h5>
                        <p>Traffic jams, wasting time on the road and monthly gas money will no longer be your
                            fear. </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- *** Choose Us Area End *** -->
    <section class="rehome-call-to-action-area bg-overlay bg-img jarallax section-padding-100"
             style="background-image: url({{asset('img/bg-img/34.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <!-- Call to Action Content -->
                    <div class="call-to-action-content wow fadeInUp" data-wow-delay="200ms">
                        <h2>Download app &amp; join now!</h2>
                        <p>Download and sign up to receive all the latest real estate news.</p>
                        <!-- Button -->
                        <div class="download-btn">
                            <a class="mr-2" href="#"><img src="img/bg-img/12.png" alt=""></a>
                            <a href="#"><img src="img/bg-img/13.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *** Blog area Start *** -->
    <section class="rehome-blog-area section-padding-100-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="200ms">
                        <h2>Great Solution For <span style="color: #92c800">Smart Traffic</span></h2>
                        <p>Traffic will no longer be your worry.</p>
                    </div>
                </div>

                <!-- Single blog content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="img/bg-img/image_2019_03_27T06_31_58_130Z.png" alt=""
                                 style="height: 230px;width: 100%">
                        </div>
                        <a class="post-title" href="#">Enforce existing road traffic laws.</a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a class="post-author" href="#">By Polly Williams</a>
                            <a class="post-date" href="#">Dec 19, 2018</a>
                            <a class="post-comment" href="#">3 Comment</a>
                        </div>
                    </div>
                </div>

                <!-- Single blog content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="img/bg-img/buytdep.jpg" alt="">
                        </div>
                        <a class="post-title" href="#">Improve perceptions of buses.</a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a class="post-author" href="#">By Mattie Ramirez </a>
                            <a class="post-date" href="#">Dec 19, 2018</a>
                            <a class="post-comment" href="#">3 Comment</a>
                        </div>
                    </div>
                </div>

                <!-- Single blog content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="img/bg-img/s3.png" alt="">
                        </div>
                        <a class="post-title" href="#">Road pricing.</a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a class="post-author" href="#">By Nicholas Brewer</a>
                            <a class="post-date" href="#">Dec 19, 2018</a>
                            <a class="post-comment" href="#">3 Comment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *** Blog area End *** -->
@endsection
