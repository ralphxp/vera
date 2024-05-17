@template('layouts.tenant')

@section('content')
    <h1 class="h3 mb-2 text-gray-800" align="center">Rent Payment</h1>
        @if($message != '')
            <div class="alert alert-info">
                {{$message}}
            </div>
        @endif
    <div class="card shadow mb-4">
        
        <div class="card-body">
        
            <div class="table-responsive">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">

                    <tbody>
                        @php
                            $user = \Codx\Comic\Model\Tenant::findOrFail(\Codx\Comic\Auth::user()->tenant_id);

                            $payment = $user->payment;
                            $contract = $user->contract;
                            $amount = $payment ? $payment->amount : 0;
                            $diff = $contract->total_rent - $amount;
                        @endphp
                        @if ($amount >= $contract->total_rent)
                        <div class="card">
                            <div class="card-body">
                                <div class="alert alert-success h4">
                                    Congrates You have no out-standing debts
                                </div>
                            </div>
                        </div>
                        @else
                        <form action="/me/pay" method = "POST">
                                <tr>
                                    <td>
                                        Your Phone Number
                                    </td>
                                    <input type="hidden" name="id" value="{{$user->tenant_id}}">
                                    <td><input type='text' class='form-control form-control-user' readonly
                                            value="{{ Codx\Comic\Auth::user()->p_no }}" name='pno'></td>
                                </tr>
                                <tr>

                                    <td><input type='hidden' class='form-control form-control-user' name='pno1'
                                            value="255717812676" readonly></td>
                                </tr>

                                <tr>
                                    <td>
                                        Amount: 

                                    </td>
                                    <td>
                                        <b class="text-danger">Debt: {{ number_format($contract->total_rent - $amount) }}</b>
                                        <input type='text' class='form-control form-control-user'
                                            name='amount'>

                                        <input type="hidden" name="from" value="{{ $contract->start_day }}">
                                        <input type="hidden" name="to" value="{{ $contract->end_day }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Payment Method</td>
                                    <td>
                                        <select type='text' class='form-control form-control-user' name='method'>
                                            <option value="cash" selected> Cash</option>
                                            <option value="cash" > Transfer</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input class='btn btn-primary btn-user btn-lg' type='submit' name='submit'
                                            value='Pay'></td>
                            </form>
                            
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
