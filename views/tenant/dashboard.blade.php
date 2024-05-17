@template('layouts.tenant')

@section('content')
    <h1 class="h3 mb-2 text-gray-800" align="center">Welcome!!</h1>
    <p class="mb-4"><span style="color:green;">You Occupy <b><b>House:
                    {{ __($user->contract->house->house_name) }}
                </b></b></span></p>

    <p class="mb-4">The information below shows the amount to be paid with respect with the terms stated and their
        respective due dates.</p>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Due Date</th>
                            <th>Amount to be Paid (NGN)</th>
                            <th>Amount Paid(NGN)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $amount = $user->payment?$user->payment->amount:0;
                        $amount = $amount > $user->contract->total_rent?$user->contract->total_rent:$amount;
                     @endphp
                       <tr>
                          <td><?=$user->contract->start_day?></td>
                          <td><?=number_format($user->contract->total_rent)?></td>
                         <td><?=number_format($amount)?></td>
                        <tr>
                        <tr>
                          <td><b><b><b>TOTAL</b></b></b></td>
                          <td><b></b></td>
                          <td><b><?=number_format($amount)?></b></td>
                        </tr>

                    </tbody>
                    <table>
                        <tbody>
                            <tr style="color:orangered">
                                <th><b>ARREARS: </b> </th>
                                
                                <td><b><?=number_format($user->contract->total_rent - $amount)?></b></td>
                               
                            </tr>
                        </tbody>
                        
                    </table>
                </table>
            </div>
        </div>
    </div>
    <p class="mb-4">For more information or help please kindly contact us through:<br /><br /><b>Phone Number: 0903 425 4553<br />Email Address: vera@gmail.com.</b></p>
@endsection
