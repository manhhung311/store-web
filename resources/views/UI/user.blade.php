<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
    </style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include("UI.menu")
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include("UI.head")
            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                class="rounded-circle mt-5" width="150px"
                                src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                                class="font-weight-bold">{{ $user['first_name'] }} {{ $user['last_name'] }}</span><span
                                class="text-black-50">{{ $user->email }}</span><span> </span></div>
                    </div>

                    <div class="col-md-5 border-right">
                        <form method="POST" action="{{ route('updateUser', ['id' => $user['id']]) }}">
                            {{ csrf_field() }}
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Profile Settings</h4>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">First Name</label><input
                                            type="text" class="form-control" name="first_name"
                                            placeholder="first name" value="{{ $user['first_name'] }}"></div>
                                    <div class="col-md-6"><label class="labels">Last Name</label><input
                                            type="text" class="form-control" name="last_name"
                                            value="{{ $user['last_name'] }}" placeholder="surname"></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12"><label class="labels">Mobile Number</label><input
                                            type="text" class="form-control" placeholder="enter phone number"
                                            value="123456789"></div>
                                    <div class="col-md-12"><label class="labels">Email ID</label><input
                                            type="email" name="email" class="form-control"
                                            placeholder="enter email id" value="{{ $user['email'] }}"></div>
                                    <div class="col-md-12"><label class="labels">Role</label><input type="text"
                                            class="form-control" disabled placeholder="education" value="admin">
                                    </div>
                                    {{-- <div class="row mt-3">
                                <div class="col-md-6"><label class="labels">Country</label><input type="text"
                                        class="form-control" placeholder="country" value=""></div>
                                <div class="col-md-6"><label class="labels">State/Region</label><input type="text"
                                        class="form-control" value="" placeholder="state"></div>
                            </div> --}}
                                </div>
                                <div class="mt-5 text-center">
                                    <input class="btn btn-primary profile-button" value="Save Profile" type="submit">
                                </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        {{-- <div class="d-flex justify-content-between align-items-center experience"><span>Edit
                                    Experience</span><span class="border px-3 p-1 add-experience"><i
                                        class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                            <div class="col-md-12"><label class="labels">Experience in Designing</label><input
                                    type="text" class="form-control" placeholder="experience" value="">
                            </div> <br>
                            <div class="col-md-12"><label class="labels">Additional Details</label><input
                                    type="text" class="form-control" placeholder="additional details"
                                    value=""></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Table End -->


    <!-- Footer Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded-top p-4">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-12 col-sm-6 text-center text-sm-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
