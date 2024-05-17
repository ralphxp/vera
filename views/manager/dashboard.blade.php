@template('layouts.manager')

@section('content')
    <h1 class="h3 mb-2 text-gray-800" align = "center">Tenants</h1>
    <p style="color:red;"><b><b>Please click a number from the table to send a message.</b></b></p>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>House Name</th>
                            <th>Duration</th>
                            <th>House Rent(NGN)</th>
                            <th>Rent paid(NGN)</th>
                            <th>Rent unpaid(NGN)</th>
                            <th>Beginning of Contract</th>
                            <th>End of Contract</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tenants as $tenant)
                            <tr>
                                <td>{{ $tenant->fname }} {{ $tenant->fname }}</td>
                                <td>
                                    <label class="small">{{ $tenant->p_no }}</label>,
                                    <label class="small">{{ $tenant->p_no }}</label>
                                </td>
                                <td>
                                    {{ $tenant->contract->house->house_name }}
                                </td>
                                <td>
                                    {{ $tenant->contract->duration_month }}
                                </td>
                                <td>
                                    {{ $tenant->contract->total_rent }}
                                </td>
                                <td>
                                    {{ $tenant->payment->amount > $tenant->contract->total_rent ? $tenant->contract->total_rent : $tenant->payment->amount }}
                                </td>
                                <td>
                                    {{ $tenant->contract->total_rent - $tenant->payment->amount < 0 ? 0 : $tenant->contract->total_rent - $tenant->payment->amount }}
                                </td>
                                <td>
                                    {{ $tenant->contract->start_day }}
                                </td>
                                <td>
                                    {{ $tenant->contract->end_day }}
                                </td>
                            </tr>
                        @endforeach
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