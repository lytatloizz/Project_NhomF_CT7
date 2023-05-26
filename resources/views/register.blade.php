<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
    <title>Register Page</title>
    <!--Bootsrap 5 CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="{{asset('assets/css/login-register.css')}}" href="styles.css">
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- Name input -->
                        <div class="form-outline mb-3">
                            <input type="text" name="user_name" class="form-control form-control-md" placeholder="Enter a valid name" required />
                            @if ($errors->has('user_name'))
                            <span class="text-danger">{{ $errors->first('user_name') }}</span>
                            @endif
                        </div>

                        <!-- Phone input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example3">Your Phone Number</label>
                            <input type="number" name="user_phone" class="form-control form-control-md" placeholder="Enter a valid phone number" required />
                            @if ($errors->has('user_phone'))
                            <span class="text-danger">{{ $errors->first('user_phone') }}</span>
                            @endif
                        </div>

                       <!-- Email input -->
                       <div class="form-outline mb-3">
                           <label class="form-label" for="form3Example3">Email address</label>
                        <input type="email" name="user_email" class="form-control form-control-md" placeholder="Enter a valid email address" required />
                        @if ($errors->has('user_email'))
                        <span class="text-danger">{{ $errors->first('user_email') }}</span>
                        @endif
                    </div>

                        <!-- Imgae input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example3">Chose Your Avatar</label>
                            <input type="file" name="user_image" class="form-control form-control-md" required />
                            @if ($errors->has('user_image'))
                            <span class="text-danger">{{ $errors->first('user_image') }}</span>
                            @endif
                        </div>

                        <!-- Rule options -->
                        <div class="form-outline mb-3">
                            <select id="rule" class="form-control form-control-md" name="user_rule">
                                <option value="1">Student</option>
                                <option value="2">Teacher</option>
                            </select>
                            <label class="form-label" for="rule">Choose your type</label>
                            @if ($errors->has('user_rule'))
                            <span class="text-danger">{{ $errors->first('user_rule') }}</span>
                            @endif
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control form-control-md" required />
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>



                        <div class="text-center text-lg-start mt-1">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                            <!-- <p class="small fw-bold mt-2 pt-1 mb-0">You really have an account? <a href="/" class="link-danger">Back to Login</a></p> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2023. All rights reserved.
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <!-- Right -->
        </div>
    </section>
</body>

</html>