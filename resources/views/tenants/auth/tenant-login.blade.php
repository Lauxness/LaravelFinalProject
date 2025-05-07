<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | Mantis Bootstrap 5 Admin Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">

    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css">

    <link rel="stylesheet" href="../assets/fonts/feather.css">

    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">

    <link rel="stylesheet" href="../assets/fonts/material.css">

    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">
    <link rel="stylesheet" href="../assets/css/style-preset.css">

</head>

<body>
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <div class="auth-main">
        <div class="auth-wrapper v3">
            <div class="auth-form">
                <div class="auth-header">
                    <a class="b-brand text-primary" style="font-size: 1.3em; text-transform:uppercase; font-weight:bold;" href="/">{{ tenant('companyName') }}</a>
                </div>
                <div class="card my-5">
                    <form method="POST" action="{{ route('login') }}" class="card-body">
                        @csrf
                        <div class="d-flex justify-content-between align-items-end mb-4">
                            <h3 class="mb-0"><b>Login</b></h3>
                            <a href="/register" class="link-primary">Don't have an account?</a>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" type="password"
                                name="password"
                                required autocomplete="current-password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="">
                                <label class="form-check-label text-muted" for="customCheckc1">Keep me sign in</label>
                            </div>
                            <h5 class="text-secondary f-w-400">Forgot Password?</h5>
                        </div>
                        <div class="d-grid mt-4">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                        <div class="saprator mt-3">
                            <span>Login with</span>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-grid">
                                    <a type="button" href="{{route('google.login')}}" class="btn mt-2 btn-light-primary bg-light text-muted">
                                        <img src="../assets/images/authentication/google.svg" alt="img"> <span class="d-none d-sm-inline-block"> Google</span>
                                    </a>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src="../assets/js/plugins/popper.min.js"></script>
    <script src="../assets/js/plugins/simplebar.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/fonts/custom-font.js"></script>
    <script src="../assets/js/pcoded.js"></script>
    <script src="../assets/js/plugins/feather.min.js"></script>
    <script>
        layout_change('dark');
    </script>
    <script>
        change_box_container('true');
    </script>
    <script>
        layout_rtl_change('false');
    </script>
    <script>
        preset_change("preset-2");
    </script>
    <script>
        font_change("Public-Sans");
    </script>

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

</body>
<!-- [Body] end -->

</html>