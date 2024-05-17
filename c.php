<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rental House Management System</title>
    <link rel="icon" href="/assets/rent.ico">

    <!-- Custom fonts for this template-->
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('layouts.admin_sidebar')

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                @include('layouts.atop')
                <div class="container-fluid">
                    @section('content')
    <h1 class="h3 mb-2 text-gray-800" align = "center">Contracts</h1>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Contract ID</th>
                            <th>Name</th>
                            <th>House Name</th>
                            <th>Duration of Occupation in months</th>
                            <th>Total Rent(NGN.)</th>
                            <th>Terms of Payment</th>
                            <th>Rent per Term(NGN.)</th>
                            <th>Beginning of Contract</th>
                            <th>End of Contract</th>
                            <th>Date of signing the Contract</th>
                            <th>Contract Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($contracts as $contract)
                            <tr>
                                <td>{{ __($contract->contract_id) }}</td>
                                <td>{{ __($contract->tenant->fname . ' ' . $contract->tenant->lname) }}</td>
                                <td><?= $contract->house->house_name ?></td>
                                <td><?= $contract->duration_month ?></td>
                                <td><?= number_format($contract->total_rent) ?></td>
                                <td><?= $contract->terms ?></td>
                                <td><?= number_format($contract->rent_per_term) ?></td>
                                <td><?= $contract->start_day ?></td>
                                <td><?= $contract->end_day ?></td>
                                <td><?= $contract->date_contract_sign ?></td>
                                @if ($contract->status != 'Active')
                                    <td style = 'color:green;'>{{ __($contract->status) }}</td>
                                @else
                                    <td style = 'color:red;'>{{ __($contract->status) }}</td>
                                @endif


                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <br />
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                    <tbody>



                        <tr>
                            <td><b><b>EXPECTED INCOME</b></b></td>
                            <td><b><b><span style = 'color:orange;'>{{ __($income) }}</b></b></td>
                        </tr>

                        <tr>
                            <td><b><b>TOTAL NUMBER OF <span style = 'color:green;'>ACTIVE</span> CONTRACTS</b></b></td>
                            <td><b><b><span style = 'color:green;'>{{ __($active) }}</span></b></b></td>
                        </tr>

                        <tr>
                            <td><b><b>TOTAL NUMBER OF <span style = 'color:red;'>INACTIVE</span> CONTRACTS</b></b></td>
                            <td><b><b><span style = 'color:red;'>{{ __($inactive) }}</span></b></b></td>
                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
                </div>

            </div>

            @include('layouts.footer')

        </div>

    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assets/js/sb-admin-2.min.js"></script>
    @section('scripts')
    <script src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/js/demo/datatables-demo.js"></script>
@endsection

</body>

</html>
