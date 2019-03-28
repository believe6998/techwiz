@extends("layout.admin-master")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit Profile</h4>
                            <h4>Name User: </h4>
                        </div>
                        <div class="content">
                            <form>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Company (disabled)</label>
                                            <input type="text" class="form-control" disabled placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" placeholder="Username ex: michael23">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label id="email">Email address</label>
                                            <input type="email" class="form-control" placeholder="Email ex: username@gmail.com">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="text" class="form-control" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="number" class="form-control" placeholder="Phone Number ex: 0978548455">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Address ex: 1 Hung Vuong">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Passport</label>
                                            <input type="text" class="form-control" placeholder="Passport ex: C03004786">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Voter ID</label>
                                            <input type="number" class="form-control" placeholder="Voter ID ex: 036200008788">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Driving Licenses</label>
                                            <input type="number" class="form-control" placeholder="Voter ID ex: 036200008788">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>About Me</label>
                                            <textarea rows="5" class="form-control"
                                                      placeholder="Here can be your description" aria-placeholder="I am extremely satisfied with the quality of your service"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success btn-fill pull-right">Update Profile
                                </button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection