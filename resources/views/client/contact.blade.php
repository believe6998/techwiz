@extends("layouts.app")
@section('content')
    <!-- *** Breadcrumb Area Start *** -->
    <div class="breadcrumb-area bg-img bg-overlay-3 wow fadeInUp" data-wow-delay="200ms"
         style="background-image:
         url({{asset('img/bg-img/34.jpg')}});
         background-position: bottom;
                     ">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                        <h2 class="page-title">Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** Breadcrumb Area End *** -->

    <!-- *** Contact Area Start *** -->
    <section class="rehomes-support-and-contact-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="contact-information-area mb-80">
                        <!-- Title -->
                        <div class="support-title wow fadeInUp" data-wow-delay="200ms">
                            <h2>Need Help ?</h2>
                        </div>

                        <!-- Support Area Content -->
                        <div class="support-area-content d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                            <!-- Support Person Thumb -->
                            <div class="support-perosn-thumb">
                                <img src="img/bg-img/police.jpg" alt="">
                            </div>
                            <div class="supprto-meta">
                                <h4>Police </h4>
                                <p>Customer Realations</p>
                                <p>963.806.0919</p>
                                <p>16 Pham Van Dong</p>
                            </div>
                        </div>

                        <!-- Support Area Content -->
                        <div class="support-area-content d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                            <!-- Support Person Thumb -->
                            <div class="support-perosn-thumb">
                                <img src="img/bg-img/smt.jpg" alt="">
                            </div>
                            <div class="supprto-meta">
                                <h4>Smart Traffic Company</h4>
                                <p>Customer Realations</p>
                                <p>190.010.000</p>
                                <p>8 Ton That Thuyet</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <!-- Leave A Reply -->
                    <div class="rehomes-contact-form mb-80 wow fadeInUp" data-wow-delay="200ms">
                        <!-- Title -->
                        <div class="support-title">
                            <h2>Get In Touch</h2>
                        </div>

                        <!-- Form -->
                        <form class="support-form" action="#" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="message-name" class="form-control mb-20"
                                           placeholder="Your Name">
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
    </section>
    <!-- *** Contact Area End *** -->
    <!-- *** Contact Information Start *** -->
    <div class="contact--information-">
        <div class="container">
            <div class="row mb-40">
                <!-- Contact Info Area -->
                <div class="col-12 col-md-4">
                    <div class="contact--info-area text-center wow fadeInUp" data-wow-delay="200ms">
                        <h4>Viet Nam</h4>
                        <p>Add: <span>8 Ton That Thuyet, Cau Giay, Ha Noi</span></p>
                        <p>Email: <span>aptech8TTT@gmail.com</span></p>
                        <p>Phone: <span>0945549999</span></p>
                    </div>
                </div>

                <!-- Contact Info Area -->
                <div class="col-12 col-md-4">
                    <div class="contact--info-area text-center wow fadeInUp" data-wow-delay="200ms">
                        <h4>United State</h4>
                        <p>Add: <span>Iris Watson, Box 283 8562 Rd, NY</span></p>
                        <p>Email: <span>US2838562@gmail.com</span></p>
                        <p>Phone: <span>123-456-789</span></p>
                    </div>
                </div>

                <!-- Contact Info Area -->
                <div class="col-12 col-md-4">
                    <div class="contact--info-area text-center wow fadeInUp" data-wow-delay="200ms">
                        <h4>Japan</h4>
                        <p>Add: <span>BBMF, Box 999 1111 Rd, Janan</span></p>
                        <p>Email: <span>BBMF9991111@gmail.com</span></p>
                        <p>Phone: <span>987-654-321</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** Contact Information End *** -->
@endsection