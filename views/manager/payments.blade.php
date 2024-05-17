@template('layouts.manager')

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
                            <th>Date Paid</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total_income = 0;
                        @endphp
                        @foreach ($payments as $payment)
                            <tr>
                                <td>{{__($payment->tenant->fname)}} {{__($payment->tenant->l4name)}}</td>
                                <td>{{__($payment->ref_no)}}</td>
                                <td><?=number_format($payment->amount)?></td>
                                <td>{{__($payment->pay_from)}}</td>
                                <td>{{__($payment->pay_to)}}</td>
                                 <td>{{__($payment->date)}}</td>
                                @php
                                    $total_income += $payment->amount;
                                @endphp
                                
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
                            <td><b><b><span style = 'color:green;'>NGN. {{number_format($total_income)}}</b></b></td>
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