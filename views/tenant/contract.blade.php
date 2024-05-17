@template('layouts.tenant')


@section('content')
    <h1 class="h3 mb-2 text-gray-800" align="center">Contract Information</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">

                    <tbody>
                        <tr>
                            <td> House Name:</td>
                            <td style = 'color:blue;'>{{ __($user->contract->house->house_name) }}</td>

                        </tr>
                        <tr>
                            <td> Cost pey month:</td>
                            <td style = 'color:blue;'>NGN. <?=number_format($user->contract->house->rent_per_month) ?></td>

                        </tr>
                        <tr>
                            <td> Duration:</td>
                            <td style = 'color:blue;'>{{ __($user->contract->duration_month) }}</td>

                        </tr>
                        <tr>
                            <td> Total Rent</td>
                            <td style = 'color:blue;'>NGN. <?=number_format($user->contract->total_rent) ?></td>

                        </tr>
                        <tr>
                            <td> Contract begins</td>
                            <td style = 'color:blue;'>{{ __($user->contract->start_day) }}</td>
                        </tr>

                        <tr>
                            <td> Contract ends</td>
                            <td style = 'color:blue;'>{{ __($user->contract->end_day) }}</td>
                        </tr>
                        <tr>
                            <td> Date contract signed</td>
                            <td style = 'color:blue;'>{{ __($user->contract->date_contract_sign) }}</td>
                        </tr>
                        <tr>
                            <td> Contract Status</td>
                            <td style = 'color:blue;'>{{ __($user->contract->status) }}</td>
                        </tr>




                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection