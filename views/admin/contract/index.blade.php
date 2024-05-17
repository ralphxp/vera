@template('layouts.admin')


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

@section('scripts')
    <script src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/js/demo/datatables-demo.js"></script>
@endsection

