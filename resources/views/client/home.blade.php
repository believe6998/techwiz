@extends('layout.client-layout')
@section('content')
    <!-- **** Welcome Maps Area Start **** -->
    <div class="welcome-area wow fadeInUp" data-wow-delay="200ms">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17107.2892861271!2d-74.01626372475907!3d40.714272545051664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1551762805743"
                    allowfullscreen></iframe>
        </div>
    </div>
    <!-- **** Welcome Maps Area End **** -->


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
                            <a href="#"><img src="{{asset('/img/bg-img/8.jpg')}}" alt=""></a>
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
                            <a href="#"><img src="{{asset('img/bg-img/9.jpg')}}" alt=""></a>
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
                            <a href="#"><img src="{{asset('/img/bg-img/8.jpg')}}" alt=""></a>
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
             style="background-image: url({{asset('/img/bg-img/11.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <!-- Call to Action Content -->
                    <div class="call-to-action-content wow fadeInUp" data-wow-delay="200ms">
                        <h2>Download app &amp; join now!</h2>
                        <p>Download and sign up to receive all the latest real estate news.</p>
                        <!-- Button -->
                        <div class="download-btn">
                            <a class="mr-2" href="#"><img src="{{asset('/img/bg-img/12.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('/img/bg-img/13.png')}}" alt=""></a>
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
                            <img src="{{asset('/img/bg-img/14.jpg')}}" alt="">
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
                            <img src="{{asset('/img/bg-img/16.jpg')}}" alt="">
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