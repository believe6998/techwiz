@extends("layout.admin-master")
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title" style="color: green">List of Complaint's User</h4>
                            <p class="category" style="color: black">We will try harder to come up with the best solutions</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>ID User</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Complaint's Content</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Time</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>COM001</td>
                                    <td>Tran Thi</td>
                                    <td>thitran123@gmail.com</td>
                                    <td>Unfortunately, your description of this server did not include a name,
                                        so we are not provided enough information to identify her. We have,
                                        however, addressed all the staffs in the retaurant.)</td>
                                    <td>20 Trường Chinh, Hà Nội</td>
                                    <td>
                                        <h3 title="Đã được xử lý">1</h3>
                                    </td>
                                    <td>22:22:22 <br> 28-3-2019</td>
                                    <td><a href="upgrade.html"><i class="far fa-edit" title="Edit Profile"></i></a></td>
                                    <td><a href=""><i class="fas fa-trash" title="Delete Profile"></i></a></td>
                                </tr>
                                <tr>
                                    <td>COM002</td>
                                    <td>Pham Thanh Hoa</td>
                                    <td>hoathanh123@gmail.com</td>
                                    <td>Unfortunately, your description of this server did not include a name,
                                        so we are not provided enough information to identify her. We have,
                                        however, addressed all the staffs in the retaurant.)</td>
                                    <td>20 Trường Chinh, Hà Nội</td>
                                    <td>
                                        <h3 title="Chưa được xử lý">0</h3>
                                    </td>
                                    <td>22:22:22 <br> 28-3-2019</td>
                                    <td><a href="upgrade.html"><i class="far fa-edit" title="Edit Profile"></i></a></td>
                                    <td><a href=""><i class="fas fa-trash" title="Delete Profile"></i></a></td>
                                </tr>
                                <tr>
                                    <td>COM003</td>
                                    <td>Ngo Thi Mai</td>
                                    <td>maingo@gmail.com</td>
                                    <td>Unfortunately, your description of this server did not include a name,
                                        so we are not provided enough information to identify her. We have,
                                        however, addressed all the staffs in the retaurant.)</td>
                                    <td>20 Trường Chinh, Hà Nội</td>
                                    <td>
                                        <h3 title="Đã được xử lý">1</h3>
                                    </td>
                                    <td>22:22:22 <br> 28-3-2019</td>
                                    <td><a href="upgrade.html"><i class="far fa-edit" title="Edit Profile"></i></a></td>
                                    <td><a href=""><i class="fas fa-trash" title="Delete Profile"></i></a></td>
                                </tr>
                                <tr>
                                    <td>COM004</td>
                                    <td>Duong Quang Phu</td>
                                    <td>phuduong123@gmail.com</td>
                                    <td>Unfortunately, your description of this server did not include a name,
                                        so we are not provided enough information to identify her. We have,
                                        however, addressed all the staffs in the retaurant.)</td>
                                    <td>20 Trường Chinh, Hà Nội</td>
                                    <td>
                                        <h3 title="Chưa được xử lý">0</h3>
                                    </td>
                                    <td>22:22:22 <br> 28-3-2019</td>
                                    <td><a href="upgrade.html"><i class="far fa-edit" title="Edit Profile"></i></a></td>
                                    <td><a href=""><i class="fas fa-trash" title="Delete Profile"></i></a></td>
                                </tr>
                                <tr>
                                    <td>COM005</td>
                                    <td>Phan Hoai Nam</td>
                                    <td>namhoai@gmail.com</td>
                                    <td>Unfortunately, your description of this server did not include a name,
                                        so we are not provided enough information to identify her. We have,
                                        however, addressed all the staffs in the retaurant.)</td>
                                    <td>20 Trường Chinh, Hà Nội</td>
                                    <td>
                                        <h3 title="Đã được xử lý">1</h3>
                                    </td>
                                    <td>22:22:22 <br> 28-3-2019</td>
                                    <td><a href="upgrade.html"><i class="far fa-edit" title="Edit Profile"></i></a></td>
                                    <td><a href=""><i class="fas fa-trash" title="Delete Profile"></i></a></td>
                                </tr>
                                <tr>
                                    <td>COM006</td>
                                    <td>Nguyen Tuan Anh</td>
                                    <td>anhtuan123@gmail.com</td>
                                    <td>Unfortunately, your description of this server did not include a name,
                                        so we are not provided enough information to identify her. We have,
                                        however, addressed all the staffs in the retaurant.)</td>
                                    <td>20 Trường Chinh, Hà Nội</td>
                                    <td>
                                        <h3 title="Chưa được xử lý">0</h3>
                                    </td>
                                    <td>22:22:22 <br> 28-3-2019</td>
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