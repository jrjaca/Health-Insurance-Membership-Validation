
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colrolib Templates">
    <meta name="author" content="Colrolib">
    <meta name="keywords" content="Colrolib Templates">

    <!-- Title Page-->
    <title>4PS Verification Utility - NCR South</title>

    <!-- Icons font CSS-->
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->

    <!-- App css -->
    <link href="{{ asset('css/bootstrap-dark.min.css')}}" id="bootstrap-dark" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bootstrap.min.css')}}" id="bootstrap-light" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ asset('css/app-rtl.min.css')}}" id="app-rtl" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('css/app-dark.min.css')}}" id="app-dark" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css')}}" id="app-light" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/main.css') }}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-img-1"><!-- p-t-165 p-b-100-->
        <br /><br /><br /><br />
        <div class="wrapper wrapper--w680">

            <div class="card card-1">
                <div class="card-body">
                    <ul class="tab-list">
                        <li class="tab-list__item active">
                            <a class="tab-list__link" href="#tab1" data-toggle="tab">4Ps Verification Utility</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <!-- Start Display Message-->
                            @include('flash-message')
                            <!-- END Display Message-->
                            <form  action="{{ route('searching') }}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <label class="label">Household ID</label>
                                    <input class="input--style-1" type="text" name="household_id" maxlength="22" autofocus>
                                </div>
                                <div class="input-group">
                                    <label class="label">Last Name</label>
                                    <input class="input--style-1" type="text" name="last_name" maxlength="100">
                                </div>
                                <div class="input-group">
                                    <label class="label">First Name</label>
                                    <input class="input--style-1" type="text" name="first_name" maxlength="100">
                                </div>
                                <div class="input-group">
                                    <label class="label">Middle Name</label>
                                    <input class="input--style-1" type="text" name="middle_name" maxlength="100">
                                </div>
                                <button class="btn-submit" type="submit">search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS--> 
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('js/global.js') }}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
