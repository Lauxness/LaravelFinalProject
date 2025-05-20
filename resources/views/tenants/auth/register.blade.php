<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Register</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset($styles->company_logo ?? 'images/car-2.jpg') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css">
    <link rel="stylesheet" href="../assets/fonts/feather.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="../assets/fonts/material.css">
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">
    <link rel="stylesheet" href="../assets/css/style-preset.css">

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main">
        <div class="auth-wrapper v3">
            <div class="auth-form">
                <div class="auth-header">
                    <a href="#"><img src="../assets/images/logo-dark.svg" alt="img"></a>
                </div>
                <div class="card my-5">
                    <form class="card-body" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="d-flex justify-content-between align-items-end mb-4">
                            <h3 class="mb-0"><b>Sign up</b></h3>
                            <a href="/login" class="link-primary">Already have an account?</a>
                        </div>


                        <div class="form-group mb-3">
                            <label class="form-label">Name*</label>
                            <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="First Name">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>



                        <div class="form-group mb-3">
                            <label class="form-label">Email Address*</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" :value="old('email')" required autocomplete="username">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Password*</label>
                            <input class="form-control" placeholder="Password" type="password"
                                name="password"
                                required autocomplete="new-password">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Confirm Password*</label>
                            <input class="form-control" placeholder="Confirm Password" type="password"
                                name="password_confirmation" required autocomplete="new-password">

                        </div>
                        <p class="mt-4 text-sm text-muted">By Signing up, you agree to our <a href="#" class="text-primary"> Terms of Service </a> and <a href="#" class="text-primary"> Privacy Policy</a></p>
                        <div class="d-grid mt-3">
                            <button type="submit" class="btn btn-primary">Create Account</button>
                        </div>
                        <div class="saprator mt-3">
                            <span>Sign up with</span>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                        <img src="../assets/images/authentication/google.svg" alt="img"> <span class="d-none d-sm-inline-block"> Google</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                        <img src="../assets/images/authentication/twitter.svg" alt="img"> <span class="d-none d-sm-inline-block"> Twitter</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                        <img src="../assets/images/authentication/facebook.svg" alt="img"> <span class="d-none d-sm-inline-block"> Facebook</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(\Session::has('success'))
    <script>
        Swal.fire({
            title: "Success",
            text: "{{\Session::get('success')}}",
            icon: "success",

        });
    </script>
    @endif
    @if ($errors->any())
    <script>
        Swal.fire({
            title: "Validation Error",
            html: "{!! implode('<br>', $errors->all()) !!}",
            icon: "error",
            confirmButtonText: "OK"
        });
    </script>
    @endif
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src="../assets/js/plugins/popper.min.js"></script>
    <script src="../assets/js/plugins/simplebar.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/fonts/custom-font.js"></script>
    <script src="../assets/js/pcoded.js"></script>
    <script src="../assets/js/plugins/feather.min.js"></script>





    <script>
        layout_change('light');
    </script>




    <script>
        change_box_container('false');
    </script>



    <script>
        layout_rtl_change('false');
    </script>


    <script>
        preset_change("preset-1");
    </script>


    <script>
        font_change("Public-Sans");
    </script>



</body>
<!-- [Body] end -->

</html>