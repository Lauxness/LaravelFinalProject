<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>{{ tenant('companyName') }}</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">

    <!-- [Favicon] icon -->

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ url('assets/images/favicon.svg') }}" type="image/x-icon">

    <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ url('assets/fonts/tabler-icons.min.css') }}">

    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ url('assets/fonts/feather.css') }}">

    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ url('assets/fonts/fontawesome.css') }}">

    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ url('assets/fonts/material.css') }}">

    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ url('assets/css/style-preset.css') }}">


</head>

<body data-pc-preset="preset-2" data-pc-direction="rtl" data-bs-theme="light">
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <nav class="pc-sidebar ">
        <div class="navbar-wrapper">
            <div class="m-header">
                @php
                $logo = $styles->company_logo ? asset($styles->company_logo) : 'images/car-2.jpg';
                @endphp

                <div class="img me-2" style="background-image: url('{{ $logo }}'); width:40px; height:40px; border-radius:50%; background-size:cover;"></div>
                <a class="b-brand text-primary" style="font-size: 1.3em; text-transform:uppercase; font-weight:bold;" href="/">{{ tenant('companyName') }}</a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <li class="pc-item {{ Request::is('/profle') ? 'active' : '' }}">

                        <a href="/profile" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-user"></i></span>
                            <span class="pc-mtext">My Profile</span>
                        </a>
                    </li>

                    <li class="pc-item pc-caption">
                        <label>Services</label>
                        <i class="ti ti-dashboard"></i>
                    </li>
                    <li class="pc-item {{ Request::is('/cars') ? 'active' : '' }}">
                        <a href="/cars" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-list"></i></span>
                            <span class="pc-mtext">Book a car</span>
                        </a>
                    </li>
                    <li class="pc-item {{ Request::is('/booking') ? 'active' : '' }}">
                        <a href="/booking" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-list"></i></span>
                            <span class="pc-mtext">My Bookings</span>
                        </a>
                    </li>
                    <li class="pc-item {{ Request::is('/users') ? 'active' : '' }}">
                        <a href="/users" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-history"></i></span>
                            <span class="pc-mtext">Booking History</span>
                        </a>
                    </li>


                    <li class="pc-item" style="cursor: pointer;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <a class="pc-link">
                            <span class="pc-micon"><i class="ti ti-logout"></i></span>
                            <span class="pc-mtext">Logout</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <!-- ======= Menu collapse Icon ===== -->
                    <li class="pc-h-item pc-sidebar-collapse">
                        <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="pc-h-item pc-sidebar-popup">
                        <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="dropdown pc-h-item d-inline-flex d-md-none">
                        <a
                            class="pc-head-link dropdown-toggle arrow-none m-0"
                            data-bs-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false">
                            <i class="ti ti-search"></i>
                        </a>
                        <div class="dropdown-menu pc-h-dropdown drp-search">
                            <form class="px-3">
                                <div class="form-group mb-0 d-flex align-items-center">
                                    <i data-feather="search"></i>
                                    <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="pc-h-item d-none d-md-inline-flex">
                        <form class="header-search">
                            <i data-feather="search" class="icon-search"></i>
                            <input type="search" class="form-control" placeholder="Search here. . .">
                        </form>
                    </li>
                </ul>
            </div>
            <!-- [Mobile Media Block end] -->
            <div class="ms-auto navs">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item pc-mega-menu">
                        <a
                            class="pc-head-link dropdown-toggle arrow-none me-0"
                            data-bs-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false">
                            <i class="ti ti-layout-grid"></i>
                        </a>
                        <div class="dropdown-menu pc-h-dropdown pc-mega-dmenu">
                            <div class="row g-0">
                                <div class="col image-block">
                                    <h2 class="text-white">Explore Components</h2>
                                    <p class="text-white my-4">Try our pre made component pages to check how it feels and suits as per your need.</p>
                                    <div class="row align-items-end">
                                        <div class="col-auto">
                                            <div class="btn btn btn-light">View All <i class="ti ti-arrow-narrow-right"></i></div>
                                        </div>
                                        <div class="col">
                                            <img src="../assets/images/mega-menu/chart.svg" alt="image" class="img-fluid img-charts">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <h6 class="mega-title">UI Components</h6>
                                    <ul class="pc-mega-list">
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Alerts</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Accordions</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Avatars</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Badges</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Breadcrumbs</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Button</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Buttons Groups</a></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <h6 class="mega-title">UI Components</h6>
                                    <ul class="pc-mega-list">
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Menus</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Media Sliders / Carousel</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Modals</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Pagination</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Progress Bars &amp; Graphs</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Search Bar</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Tabs</a></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <h6 class="mega-title">Advance Components</h6>
                                    <ul class="pc-mega-list">
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Advanced Stats</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Advanced Cards</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Lightbox</a></li>
                                        <li><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Notification</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown pc-h-item">
                        <a
                            class="pc-head-link dropdown-toggle arrow-none me-0"
                            data-bs-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false">
                            <i class="ti ti-language"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                            <a href="#!" class="dropdown-item">
                                <i class="ti ti-user"></i>
                                <span>My Account</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="ti ti-settings"></i>
                                <span>Settings</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="ti ti-headset"></i>
                                <span>Support</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="ti ti-lock"></i>
                                <span>Lock Screen</span>
                            </a>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                                <i class="ti ti-power"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown pc-h-item">
                        <a
                            class="pc-head-link dropdown-toggle arrow-none me-0"
                            data-bs-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false">
                            <i class="ti ti-bell"></i>
                            <span class="badge bg-success pc-h-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <h5 class="m-0">Notification</h5>
                                <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-circle-check text-success"></i></a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
                                <div class="list-group list-group-flush w-100">
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="user-avtar bg-light-success"><i class="ti ti-gift"></i></div>
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">3:00 AM</span>
                                                <p class="text-body mb-1">It's <b>Cristina danny's</b> birthday today.</p>
                                                <span class="text-muted">2 min ago</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="user-avtar bg-light-primary"><i class="ti ti-message-circle"></i></div>
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">6:00 PM</span>
                                                <p class="text-body mb-1"><b>Aida Burg</b> commented your post.</p>
                                                <span class="text-muted">5 August</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="user-avtar bg-light-danger"><i class="ti ti-settings"></i></div>
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">2:45 PM</span>
                                                <p class="text-body mb-1">Your Profile is Complete &nbsp;<b>60%</b></p>
                                                <span class="text-muted">7 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="user-avtar bg-light-primary"><i class="ti ti-headset"></i></div>
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">9:10 PM</span>
                                                <p class="text-body mb-1"><b>Cristina Danny </b> invited to join <b> Meeting.</b></p>
                                                <span class="text-muted">Daily scrum meeting time</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="text-center py-2">
                                <a href="#!" class="link-primary">View all</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown pc-h-item">
                        <a
                            class="pc-head-link dropdown-toggle arrow-none me-0"
                            data-bs-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false">
                            <i class="ti ti-mail"></i>
                        </a>
                        <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <h5 class="m-0">Message</h5>
                                <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-x text-danger"></i></a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
                                <div class="list-group list-group-flush w-100">
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{url('assets/images/user/avatar-2.jpg')}}" alt="user-image" class="user-avtar">
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">3:00 AM</span>
                                                <p class="text-body mb-1">It's <b>Cristina danny's</b> birthday today.</p>
                                                <span class="text-muted">2 min ago</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{url('assets/images/user/avatar-1.jpg')}}" alt="user-image" class="user-avtar">
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">6:00 PM</span>
                                                <p class="text-body mb-1"><b>Aida Burg</b> commented your post.</p>
                                                <span class="text-muted">5 August</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="../assets/images/user/avatar-3.jpg" alt="user-image" class="user-avtar">
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">2:45 PM</span>
                                                <p class="text-body mb-1"><b>There was a failure to your setup.</b></p>
                                                <span class="text-muted">7 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{url('assets/images/user/avatar-4.jpg')}}" alt="user-image" class="user-avtar">
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">9:10 PM</span>
                                                <p class="text-body mb-1"><b>Cristina Danny </b> invited to join <b> Meeting.</b></p>
                                                <span class="text-muted">Daily scrum meeting time</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="text-center py-2">
                                <a href="#!" class="link-primary">View all</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown pc-h-item header-user-profile">
                        <a
                            class="pc-head-link dropdown-toggle arrow-none me-0"
                            data-bs-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="false"
                            data-bs-auto-close="outside"
                            aria-expanded="false">
                            <img src="{{ Auth::user()->profile_picture ? asset(Auth::user()->profile_picture) : url('assets/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar" style="width: 25px; height: 25px; object-fit: cover;">


                            <span>{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header">
                                <div class="d-flex mb-1">
                                    <div class="flex-shrink-0">
                                        <img src="{{ Auth::user()->profile_picture ? asset(Auth::user()->profile_picture) : url('assets/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar wid-35" style="width: 40px; height: 40px; object-fit: cover;">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">{{ Auth::user()->name }}</h6>
                                        <span>UI/UX Designer</span>
                                    </div>
                                    <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-power text-danger"></i></a>
                                </div>
                            </div>
                            <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link active"
                                        id="drp-t1"
                                        data-bs-toggle="tab"
                                        data-bs-target="#drp-tab-1"
                                        type="button"
                                        role="tab"
                                        aria-controls="drp-tab-1"
                                        aria-selected="true"><i class="ti ti-user"></i> Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="drp-t2"
                                        data-bs-toggle="tab"
                                        data-bs-target="#drp-tab-2"
                                        type="button"
                                        role="tab"
                                        aria-controls="drp-tab-2"
                                        aria-selected="false"><i class="ti ti-settings"></i> Setting</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="mysrpTabContent">
                                <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0">
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-edit-circle"></i>
                                        <span>Edit Profile</span>
                                    </a>
                                    <a href="{{route('profile.edit')}}" class="dropdown-item">
                                        <i class="ti ti-user"></i>
                                        <span>View Profile</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-clipboard-list"></i>
                                        <span>Social Profile</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-wallet"></i>
                                        <span>Billing</span>
                                    </a>
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                                        <i class="ti ti-power"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                                <div class="tab-pane fade" id="drp-tab-2" role="tabpanel" aria-labelledby="drp-t2" tabindex="0">
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-help"></i>
                                        <span>Support</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-user"></i>
                                        <span>Account Settings</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-lock"></i>
                                        <span>Privacy Center</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-messages"></i>
                                        <span>Feedback</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-list"></i>
                                        <span>History</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    @yield('content')

    <!-- [Page Specific JS] end -->

    <!-- Required Js -->
    <script src="{{ url('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ url('assets/js/pcoded.js') }}"></script>
    <script src="{{ url('assets/js/plugins/feather.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <script>
        layout_change('light');
    </script>
    <script>
        change_box_container("{{$styles->box_container}}");
    </script>
    <script>
        layout_rtl_change("{{$styles->isRTL}}");
    </script>
    <script>
        preset_change("{{$styles->preset}}");
    </script>
    <script>
        font_change("{{$styles->font}}");
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
    @if (session('error'))
    <script>
        Swal.fire({
            title: "Something went wrong",
            text: "{{ session('error') }}",
            icon: "error",
            confirmButtonText: "OK"
        });
    </script>
    @endif
</body>
<!-- [Body] end -->

</html>