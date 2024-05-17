@template('layouts.admin')

@section('content')
    <h1 class="h3 mb-2 text-gray-800" align = "center">Payments</h1>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Reference Number</th>
                            <th>Amount Paid (NGN)</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $payment)
                            <tr>
                                <td>{{__($payment->tenant->fname)}} {{__($payment->tenant->fname)}}</td>
                                <td>{{__($payment->ref_no)}}</td>
                                <td><?=number_format($payment->amount)?></td>
                                <td>{{__($payment->pay_from)}}</td>
                                <td>{{__($payment->pay_to)}}</td>
                                <td>{{__($payment->date)}}</td>
                                <td align = 'center'>
                                    <a href='/payments/edit/{{__($payment->payment_id)}}' class='btn btn-success btn-circle'>
                                        <i class='fas fa-edit'></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                <hr>
                <br />
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                    <tbody>

                        <tr>
                            <td><b><b>TOTAL INCOME</b></b></td>
                            <td><b><b><span style = 'color:green;'>NGN. 0</b></b></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/demo/datatables-demo.js"></script>
@endsection