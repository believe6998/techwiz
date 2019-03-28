@extends("layout.admin-master")
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title" style="color: green">List of subscribers</h4>
                            <p class="category" style="color: black">Customers are our greatest asset</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>ID User</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Passport</th>
                                <th>Voter ID</th>
                                <th>Driving Licenses</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>A001</td>
                                    <td>Tran Thi</td>
                                    <td>thitran123@gmail.com</td>
                                    <td>1122334455</td>
                                    <td>01236547897</td>
                                    <td>1 Ton That Thuyet,Ha Noi</td>
                                    <td>C003123456</td>
                                    <td>0362123456789</td>
                                    <td>A1254797788</td>
                                    <td><a href="upgrade.html"><i class="far fa-edit fa-2x" title="Edit Profile"></i></a></td>
                                    <td><a href=""><i class="fas fa-trash" title="Delete Profile"></i></a></td>
                                </tr>
                                <tr>
                                    <td>A002</td>
                                    <td>Pham Thanh Hoa</td>
                                    <td>hoathanh123@gmail.com</td>
                                    <td>1122334445</td>
                                    <td>01236547897</td>
                                    <td>2 Ton That Thuyet,Ha Noi</td>
                                    <td>C003123456</td>
                                    <td>0362123456789</td>
                                    <td>A1254797788</td>
                                    <td><a href="upgrade.html"><i class="far fa-edit" title="Edit Profile"></i></a></td>
                                    <td><a href=""><i class="fas fa-trash" title="Delete Profile"></i></a></td>
                                </tr>
                                <tr>
                                    <td>A003</td>
                                    <td>Ngo Thi Mai</td>
                                    <td>maingo@gmail.com</td>
                                    <td>1122334444</td>
                                    <td>01236547879</td>
                                    <td>3 Ton That Thuyet,Ha Noi</td>
                                    <td>C003123456</td>
                                    <td>0362123456789</td>
                                    <td>A1254797788</td>
                                    <td><a href="upgrade.html"><i class="far fa-edit" title="Edit Profile"></i></a></td>
                                    <td><a href=""><i class="fas fa-trash" title="Delete Profile"></i></a></td>
                                </tr>
                                <tr>
                                    <td>A004</td>
                                    <td>Duong Quang Phu</td>
                                    <td>phuduong123@gmail.com</td>
                                    <td>1122334554</td>
                                    <td>01236547898</td>
                                    <td>4 Ton That Thuyet,Ha Noi</td>
                                    <td>C003123456</td>
                                    <td>0362123456789</td>
                                    <td>A1254797788</td>
                                    <td><a href="upgrade.html"><i class="far fa-edit" title="Edit Profile"></i></a></td>
                                    <td><a href=""><i class="fas fa-trash" title="Delete Profile"></i></a></td>
                                </tr>
                                <tr>
                                    <td>A005</td>
                                    <td>Phan Hoai Nam</td>
                                    <td>namhoai@gmail.com</td>
                                    <td>1122334414</td>
                                    <td>01236547555</td>
                                    <td>5 Ton That Thuyet,Ha Noi</td>
                                    <td>C003123456</td>
                                    <td>0362123456789</td>
                                    <td>A1254797788</td>
                                    <td><a href="upgrade.html"><i class="far fa-edit" title="Edit Profile"></i></a></td>
                                    <td><a href=""><i class="fas fa-trash" title="Delete Profile"></i></a></td>
                                </tr>
                                <tr>
                                    <td>A006</td>
                                    <td>Nguyen Tuan Anh</td>
                                    <td>anhtuan123@gmail.com</td>
                                    <td>11223899848</td>
                                    <td>01236544441</td>
                                    <td>6 Ton That Thuyet,Ha Noi</td>
                                    <td>C003123456</td>
                                    <td>0362123456789</td>
                                    <td>A1254797788</td>
                                    <td><a href="upgrade.html"><i class="far fa-edit" title="Edit Profile"></i></a></td>
                                    <td><a href=""><i class="fas fa-trash" title="Delete Profile"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
