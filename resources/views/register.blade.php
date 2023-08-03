<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description"
        content="A list of fields that a user will input data into and submit to a company or individual.">
    <title>Register | Nifty Template</title>

    <!-- STYLESHEETS -->

    <!-- Fonts [ OPTIONAL ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Ubuntu:wght@400;500;700&amp;display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS [ REQUIRED ] -->
    <link rel="stylesheet"
        href="{{asset('assets/css/bootstrap.min.75a07e3a3100a6fed983b15ad1b297c127a8c2335854b0efc3363731475cbed6.css')}}">

    <!-- Nifty CSS [ REQUIRED ] -->
    <link rel="stylesheet"
        href="{{asset('assets/css/nifty.min.4d1ebee0c2ac4ed3c2df72b5178fb60181cfff43375388fee0f4af67ecf44050.css')}}">

</head>

<body class="">

    <!-- PAGE CONTAINER -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="root" class="root front-container">

        <!-- CONTENTS -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section id="content" class="content">
            <div class="content__boxed w-100 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <div class="content__wrap">

                    <!-- Login card -->
                    <div class="card shadow-lg">
                        <div class="card-body">

                            <div class="text-center">
                                <h1 class="h3">Create a New Account</h1>
                                <p>Come join the Nifty community! Let's set up your account.</p>
                            </div>

                            <form class="mt-5" action="/login">

                                <div class="w-md-400px d-inline-flex row g-3 mb-4">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="First name"
                                            aria-label="First name" autofocus>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Last name"
                                            aria-label="Last name">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Username"
                                            aria-label="Username">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" placeholder="Password"
                                            aria-label="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" placeholder="Confirm Password"
                                            aria-label="Confirm Password">
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input id="_dm-registerCheck" class="form-check-input" type="checkbox">
                                    <label for="_dm-registerCheck" class="form-check-label">
                                        I agree with the <a href="#" class="btn-link text-decoration-underline">Terms
                                            and Conditions</a>
                                    </label>
                                </div>

                                <div class="d-grid mt-5">
                                    <button class="btn btn-primary btn-lg" type="submit">Register</button>
                                </div>
                            </form>

                            <div class="d-flex justify-content-between mt-4">
                                Already have an account ?
                                <a href="/login" class="btn-link text-decoration-none">Login</a>
                            </div>

                            <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                <h5 class="m-0">Sign Up with</h5>

                                <!-- Social media buttons -->
                                <div class="ms-3">
                                    <a href="#" class="btn btn-sm btn-icon btn-hover btn-primary text-inherit">
                                        <i class="demo-psi-facebook fs-5"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-icon btn-hover btn-info text-inherit">
                                        <i class="demo-psi-twitter fs-5"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-icon btn-hover btn-danger text-inherit">
                                        <i class="demo-psi-google-plus fs-5"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-icon btn-hover btn-warning text-inherit">
                                        <i class="demo-psi-instagram fs-5"></i>
                                    </a>
                                </div>
                                <!-- END : Social media buttons -->

                            </div>

                        </div>
                    </div>
                    <!-- END : Login card -->

                </div>
            </div>
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - CONTENTS -->
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - PAGE CONTAINER -->

    <!-- JAVASCRIPTS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- Bootstrap JS [ OPTIONAL ] -->
    <script src="{{asset('assets/js/bootstrap.min.bdf649e4bf3fa0261445f7c2ed3517c3f300c9bb44cb991c504bdc130a6ead19.js')}}"
        defer></script>

    <!-- Nifty JS [ OPTIONAL ] -->
    <script src="{{asset('assets/js/nifty.min.b53472f123acc27ffd0c586e4ca3dc5d83c0670a3a5e120f766f88a92240f57b.js')}}" defer>
    </script>

</body>


<!-- Mirrored from themeon.net/nifty/v3.0.1/front-pages/register/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jan 2023 07:34:35 GMT -->

</html>