<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rent X</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />

    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">RentX</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#apply">Apply</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">
                        Fast & Easy Way To Rent A Car</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
                    <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">We've got what you need!</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">A comprehensive software solution that provides everything you need to efficiently manage and grow your car rental business. From reservations and fleet management to billing, customer support, and real-time analytics, it’s your all-in-one platform designed to streamline operations and enhance the customer experience.</p>
                    <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">At Your Service</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Customizable</h3>
                        <p class="text-muted mb-0">Customize your themes and layout.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Up to Date</h3>
                        <p class="text-muted mb-0">Has an update button when there is new release of the app.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Ready to Publish</h3>
                        <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">High ratings</h3>
                        <p class="text-muted mb-0">Loved by many company.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" title="Project Name">
                        <img class="img-fluid" src="images/car-8.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Car</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" title="Project Name">
                        <img class="img-fluid" src="images/car-3.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Car</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" title="Project Name">
                        <img class="img-fluid" src="images/car-4.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Car</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" title="Project Name">
                        <img class="img-fluid" src="images/car-10.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Car</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" title="Project Name">
                        <img class="img-fluid" src="images/car-6.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Car</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" title="Car">
                        <img class="img-fluid" src="images/car-1.jpg" alt="..." />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Car</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="page-section" id="apply">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Apply as a Tenant!</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Ready to make your car rentals business easier? Apply as a tenant now!</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">

                    <form method="POST" action="{{ route('tenants.store') }}" id="applyForm">
                        @csrf
                        <!-- Name input-->
                        <input type="hidden" name="isPaused" value="0">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" name="name" placeholder="Enter your name..." required />
                            <label for="name">Full name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="companyName" name="companyName" type="text" placeholder="Enter your company name..." required />
                            <label for="name">Company name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" required />
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="companyName" name="address" type="text" placeholder="Enter your company name..." required />
                            <label for="name">Address</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="companyName" name="domain" type="text" placeholder="Enter your company name..." required />
                            <label for="name">Domain Name</label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <select class="form-control" id="companyName" name="plan" required>
                                <option value="free">Free</option>
                                <option value="standard">Standard</option>
                                <option value="premium">Premium</option>
                            </select>
                            <label for="name">Plan</label>
                        </div>
                        <div class="d-grid"><button class="btn btn-primary btn-xl" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>

        </div>
    </section>
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
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; RentX</div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>