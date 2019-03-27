@extends("layout.admin-master")
@section('content')
    <div class="col-md-4">
        <div class="card card-user">
            <div class="image">
                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"
                     alt="..."/>
            </div>
            <div class="content">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="assets/img/51496121_762796120767363_8583723425044889600_n.jpg" alt="..."/>

                        <h4 class="title">Pham Thanh Hoa<br/>
                            <small>hoaThanh1234</small>
                        </h4>
                    </a>
                </div>
                <p class="description text-center"> "Koenigsegg Jesko <br>
                    When things become too familiar<br>
                    They often don't cherish each other
                </p>
            </div>
            <hr>
            <div class="text-center">
                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i>
                </button>

            </div>
        </div>
    </div>
    @endsection