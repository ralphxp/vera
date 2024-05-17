@template('layouts.tenant')

@section('content')
    <h1 class="h3 mb-2 text-gray-800" align="center">Payment Information.</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Payment Reference Number</th>
                            <th>Amount (NGN.)</th>
                            <th>Payment For</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td><?=$user->payment->ref_no?></td>
                            <td><?=$user->payment->amount?></td>
                            <td><?=$user->payment->pay_from. ' to '.$user->payment->pay_to?></td> 
                        </tr>
                        <tr>
                            <td></td>
                            <td><b><b><b>TOTAL</b></b></b></td>
                            <td style = 'color:green;'><b><b>NGN</b></b>
                            </td>
                        </tr>
                       

                    </tbody>
                </table>
                <hr>
                <br />
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                        
                        
                        <tr>
                        <td><b><b>TOTAL RENT:</b></b></td>
                        <td style = 'color:green;'><b><b>NGN. <?=number_format($user->contract->total_rent)?></b></b></td>
                        </tr>
                        <tr>
                        <td><b><b>ARREARS:</b></b></td>
                        <td><b><b><span style = 'color:red;'>NGN. <?=number_format($user->contract->total_rent - $user->payment->amount)?> </span></b></b></td>
                        </tr>
                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
