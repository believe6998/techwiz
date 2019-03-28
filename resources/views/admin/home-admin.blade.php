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
    <div id="map" style="height: 80vh">
    </div>
    <script>
        var markerMap ={};

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

            markerMap[id].setMap(null)

        }

        function initMap() {
            // Map options

            var styleArray =[
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
                center: {lat: 21.0288722, lng: 105.7795577},
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
            var map = new google.maps.Map(document.getElementById('map'), options);

            var images = {
                jam:
                    {
                        url: 'https://www.tycoifs.ca/wps/wcm/connect/61557331-2b17-4237-a6fe-e77ecdf8dbbb/pulse12.gif?MOD=AJPERES&CACHEID=ROOTWORKSPACE-61557331-2b17-4237-a6fe-e77ecdf8dbbb-kNcW.Bt',
                        scaledSize: new google.maps.Size(70, 70),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(0, 32)
                    },
                accident:
                    {
                        url: 'https://hotelmarkovo.bg/en/wp-content/uploads/2018/05/hotelmarkovogreenpulse.gif',
                        scaledSize: new google.maps.Size(70, 70),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(0, 32)
                    },
                disaster:
                    {
                        url: 'https://iwant2study.org/lookangejss/01_measurement/ejss_model_horizontalverticalquiz01/horizontalvertical/giphy.gif',
                        scaledSize: new google.maps.Size(70, 70),
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

                markerMap[id]=marker;
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
    <div class="container" style="padding-top: 100px">
        <div class="row">
            <div class="col-12">
                <!-- Leave A Reply -->
                <div class="rehomes-contact-form mb-80 wow fadeInUp" data-wow-delay="200ms">
                    <!-- Title -->
                    <div class="support-title">
                        <h1>What Is Your Traffic Problem?</h1>
                        <h2>Please Connect With Us</h2>
                    </div>

                    <!-- Form -->
                    <form class="support-form" action="#" method="post">
                        <div class="row">
                            <div class="col-12">
                                <input type="text" name="message-name" class="form-control mb-20"
                                       placeholder="Your Name">
                            </div>
                            <div class="col-12">
                                <input type="text" name="message-where" class="form-control mb-20"
                                       placeholder="Where Are You">
                            </div>
                            <div class="col-12">
                                <input type="text" name="message-problem" class="form-control mb-20"
                                       placeholder="Your Problem">
                            </div>
                            <div class="col-12">
                                <input type="email" name="message-email" class="form-control mb-20" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control mb-30" placeholder="Messages"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn sendMessage-btn">Send Messages</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- **** Choose Us Area Start **** -->
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
                        <p>Traffic jams, wasting time on the road and monthly gas money will no longer be your fear. </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- **** Choose Us Area End **** -->

    <!-- **** Categories By Property Area Start **** -->
    <section class="rehomes-categories-property-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="200ms">
                        <h1><span style="color: #92c800">New</span></h1>
                        <p>Sign in to receive the latest traffic information and more.</p>
                    </div>
                </div>

                <!-- Single Categories and Property Content -->
                <div class="col-12 col-md-8">
                    <div class="single-categories-property-area bg-gradient-overlay wow fadeInUp"
                         data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <a href="#"><img
                                        src="https://www.homegrounds.co/wp-content/uploads/2017/07/Best-Travel-Coffee-Makers.jpg"
                                        alt=""></a>
                        </div>
                        <!-- Title -->
                        <a class="categories-title" href="#">5 Properties</a>
                        <!-- Property Name and Price -->
                        <div class="property-name-price-text">
                            <a href="#">Highway surveillance camera solution</a>
                            <p>From CadPro About (ITS)</p>
                        </div>
                    </div>
                </div>

                <!-- Single Categories and Property Content -->
                <div class="col-12 col-md-4">
                    <div class="single-categories-property-area bg-gradient-overlay wow fadeInUp"
                         data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <a href="#"><img src="img/bg-img/8.jpg" alt=""></a>
                        </div>
                        <!-- Title -->
                        <a class="categories-title" href="#">3 Properties</a>
                        <!-- Property Name and Price -->
                        <div class="property-name-price-text">
                            <a href="#">Camera counting solution and vehicle speed control</a>
                            <p>From CadProTMS About CadProJSC</p>
                        </div>
                    </div>
                </div>
                <!-- Single Categories and Property Content -->
                <div class="col-12 col-md-4">
                    <div class="single-categories-property-area bg-gradient-overlay wow fadeInUp"
                         data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <a href="#"><img src="img/bg-img/9.jpg" alt=""></a>
                        </div>
                        <!-- Title -->
                        <a class="categories-title" href="#">2 Properties</a>
                        <!-- Property Name and Price -->
                        <div class="property-name-price-text">
                            <a href="#">Solution to check vehicle weight</a>
                            <p>From The Transportation'sVN About RFID</p>
                        </div>
                    </div>
                </div>

                <!-- Single Categories and Property Content -->
                <div class="col-12 col-md-8">
                    <div class="single-categories-property-area bg-gradient-overlay wow fadeInUp"
                         data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <a href="#"><img
                                        src="https://www.homegrounds.co/wp-content/uploads/2017/07/Best-Travel-Coffee-Mugs.jpg"
                                        alt=""></a>
                        </div>
                        <!-- Title -->
                        <a class="categories-title" href="#">5 Properties</a>
                        <!-- Property Name and Price -->
                        <div class="property-name-price-text">
                            <a href="#">Signage solution information changes</a>
                            <p>From WONAV CT And GIS</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8">
                    <div class="single-categories-property-area bg-gradient-overlay wow fadeInUp"
                         data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <a href="#"><img
                                        src="https://www.homegrounds.co/wp-content/uploads/2018/10/Travel-Coffee-Kits.jpg"
                                        alt=""></a>
                        </div>
                        <!-- Title -->
                        <a class="categories-title" href="#">4 Properties</a>
                        <!-- Property Name and Price -->
                        <div class="property-name-price-text">
                            <a href="#">Solution center for traffic management and management
                            </a>
                            <p>From ITS HCM city, VN</p>
                        </div>
                    </div>
                </div>
                <!-- Single Categories and Property Content -->
                <div class="col-12 col-md-4">
                    <div class="single-categories-property-area bg-gradient-overlay wow fadeInUp"
                         data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <a href="#"><img src="img/bg-img/8.jpg" alt=""></a>
                        </div>
                        <!-- Title -->
                        <a class="categories-title" href="#">6 Properties</a>
                        <!-- Property Name and Price -->
                        <div class="property-name-price-text">
                            <a href="#">Automatic toll collection solution without stopping one-stop toll collection</a>
                            <p>From ETC About RFID </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **** Categories By Property Area End **** -->

    <!-- **** Call to Action Area Start **** -->
    <section class="rehome-call-to-action-area bg-overlay bg-img jarallax section-padding-100"
             style="background-image: url(img/bg-img/11.jpg);">
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
    <!-- **** Call to Action Area End **** -->

    <!-- **** Blog area Start **** -->
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
                            <img src="img/bg-img/14.jpg" alt="">
                        </div>
                        <a class="post-title" href="#">Benjamin Franklin S Method Of Habit Formation</a>
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
                            <img src="img/bg-img/15.jpg" alt="">
                        </div>
                        <a class="post-title" href="#">How To Set Intentions That Energize You</a>
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
                            <img src="img/bg-img/16.jpg" alt="">
                        </div>
                        <a class="post-title" href="#">Burning Desire Golden Key Or Red Herring</a>
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
@endsection
