
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
    <div class="page-wrapper bg-img-1"> <!-- p-t-165 p-b-100-->
        <br /><br />
        <div class="row">
            <div class="col-11" style="margin: auto">
                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" onclick="history.back()">Back</button> <br /><br />
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>                                    
                                    <th>#</th>
                                    <th>Region</th> 
                                    <th>Province</th>
                                    <th>Municipality</th>
                                    <th>Barangay</th>
                                    <th>Household Id</th>
                                    <th>Entry Id</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Extension Name</th>
                                    <th>Sex</th>
                                    <th>Birthday</th>
                                    <th>Age</th>
                                    <th>Relationship to hh head</th>
                                    <th>Grantee</th>
                                    <th>For Enrolment</th>
                                    <th>For 3 in 1</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($members as $key => $row)  
                                <tr>
                                    <td>{{ $key +1 }}</td>
                                    <td>{{ $row->REGION }}</td>
                                    <td>{{ $row->PROVINCE }}</td>
                                    <td>{{ $row->MUNICIPALITY }}</td>
                                    <td>{{ $row->BARANGAY }}</td>
                                    <td>{{ $row->HOUSEHOLD_ID }}</td>
                                    <td>{{ $row->ENTRY_ID }}</td>
                                    <td>{{ $row->LAST_NAME }}</td>
                                    <td>{{ $row->FIRST_NAME }}</td>
                                    <td>{{ $row->MIDDLE_NAME }}</td>
                                    <td>{{ $row->EXTENSION_NAME }}</td>
                                    <td>{{ $row->SEX }}</td>
                                    <td>{{ $row->BIRTHDAY }}</td>   
                                    <td>{{ $row->AGE }}</td>
                                    <td>{{ $row->RELATIONSHIP_TO_HH_HEAD }}</td>
                                    <td>{{ $row->GRANTEE }}</td>
                                    <td>{{ $row->FOR_ENROLMENT }}</td>
                                    <td>{{ $row->FOR_3_IN_1 }}</td>
                                    <td>{{ $row->CATEGORY }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
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
