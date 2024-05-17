@template('auth.layout')

@section('content')
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block"><img src="assets/house.jpg" alt="Rental House" width="500"
                                height="530" style="opacity:0.6;"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><b><b>Rental House Management
                                                System</b></b><br /><br />Login</h1>
                                </div>
                                <div class="text-center">
                                    <div class="color-red" style="color:red ">{{ __($message) }}</div>
                                </div>
                                <form class="user" action="/login" method = "POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username"
                                            aria-describedby="emailHelp" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password"
                                            placeholder="Password">
                                    </div>

                                    <input class="btn btn-primary btn-user btn-block" type="submit" name="login"
                                        value="Login">
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection



