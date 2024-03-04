
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
    <title>4PS Verification Utility</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- App css -->
    <link href="{{ asset('css/bootstrap-dark.min.css')}}" id="bootstrap-dark" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ asset('css/app-rtl.min.css')}}" id="app-rtl" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('css/app-dark.min.css')}}" id="app-dark" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" media="all">

    <!-- DataTables -->
    <link href="{{ asset('libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="page-wrapper bg-img-1" class="center"> <!-- p-t-165 p-b-100-->  
            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        {{-- <h1 class="display-2 font-weight-medium">4<i class="bx bx-buoy bx-spin text-primary display-3"></i>419</h1> --}}
                        <h4 class="text-uppercase">PAGE EXPIREddD</h4>
                        <div class="mt-5 text-center">
                            <a class="btn btn-primary waves-effect waves-light" href="{{ url('/') }}">Go to Home Page</a>
                            {{-- <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" onclick="history.back()">Back</button> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-6">
                    <div>
                        <img src="{{ asset('assets/images/error-img.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/node-waves/node-waves.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('libs/datatables/datatables.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('libs/pdfmake/pdfmake.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('js/pages/datatables.init.js') }}"></script>    

    <script src="{{ asset('js/app.js') }}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
