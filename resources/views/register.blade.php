<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="css/homepage.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="{{ route('createuser') }}" method="POST">
                                        @csrf

                                            <div class="results">
                                                @if (session('Success'))
                                                        <div class="alert alert-success">
                                                            {{ session('Success') }}
                                                        </div>
                                                @endif

                                                <!-- @if($errors->any())
                                                        <div class="form-group">
                                                            @foreach($errors->all() as $error)
                                                                <div class="alert alert-danger"> 
                                                                    {{ $error }}
                                                                    <br>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                @endif

                                            </div> -->


                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                                        <input class="form-control py-4" id="inputFirstName" name="firstname" type="text" placeholder="Enter first name" value="{{ old('firstname') }}" />
                                                        <!-- <span class="text-danger"> @error ('firstname') {{ $message }} @enderror</span> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4" id="inputLastName" name="lastname" type="text" placeholder="Enter last name" value="{{ old('lastname') }}"/>
                                                        <!-- <span class="text-danger"> @error ('lastname') {{ $message }} @enderror</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                        <input class="form-control py-4" id="inputEmailAddress" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" value="{{ old('email') }}"/>
                                                        <!-- <span class="text-danger"> @error ('email') {{ $message }} @enderror</span> -->
                                                    </div>
                                                </div>  

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <br>
                                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                        <label for="role1">Admin</label><br>
                                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                                        <label for="role2"> Student</label><br>
                                                        <!-- <span class="text-danger"> @error ('email') {{ $message }} @enderror</span> -->
                                                    </div>  
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Enter password" />
                                                        <!-- <span class="text-danger"> @error ('password') {{ $message }} @enderror</span> -->

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input class="form-control py-4" id="inputConfirmPassword" name="password_confirmation" type="password" placeholder="Confirm password" />
                                                        <!-- <span class="text-danger"> @error ('password') {{ $message }} @enderror</span> -->

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mt-4 mb-0">
                                                <button type="sumbit" class="btn btn-primary btn-block">Create Account</button>
                                            </div>

                                            <br>
                                            
                                            @if($errors->any())
                                                        <div class="form-group">
                                                            @foreach($errors->all() as $error)
                                                                <div class="alert alert-danger"> 
                                                                    {{ $error }}
                                                                    <br>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                @endif

                                            </div>

                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login">Already have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>