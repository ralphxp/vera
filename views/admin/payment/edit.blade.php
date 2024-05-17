@template('layouts.admin')


@section('content')
    <h1 class="h3 mb-2 text-gray-800" align="center">Edit Payment.</h1>
    <p style="color:red;"><b><b>Please choose a particular payment to change from the table showing payment
                information.</b></b></p>

    <div class="card shadow mb-4">
        <div class="card-body">
            <h4 style="color:blue">
                <?= $message ? $message : '' ?>
            </h4>
            <div class="table-responsive">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">

                    <tbody>
                        <form action="" method = "POST">
                            <tr>
                                <td>
                                    Payment ID:
                                </td>
                                <td><input type='text' class='form-control form-control-user' name='id'
                                        value = "{{__($payment->payment_id)}}" readonly></td>
                            </tr>
                            <tr>
                                <td>
                                    Payment From:
                                </td>
                                <td>
                                    <select class="custom-select" name="from" id="terms" style="width:300px;">
                                        <option value = "<?=$payment->pay_from?>"><?=$payment->pay_from?> (Current)</option>
                                        <option value = "January <?php echo date('Y'); ?>">January <?php echo date('Y'); ?></option>
                                        <option value = "February <?php echo date('Y'); ?>">February <?php echo date('Y'); ?></option>
                                        <option value = "March <?php echo date('Y'); ?>">March <?php echo date('Y'); ?></option>
                                        <option value = "April <?php echo date('Y'); ?>">April <?php echo date('Y'); ?></option>
                                        <option value = "May <?php echo date('Y'); ?>">May <?php echo date('Y'); ?></option>
                                        <option value = "June <?php echo date('Y'); ?>">June <?php echo date('Y'); ?></option>
                                        <option value = "July <?php echo date('Y'); ?>">July <?php echo date('Y'); ?></option>
                                        <option value = "August <?php echo date('Y'); ?>">August <?php echo date('Y'); ?></option>
                                        <option value = "September <?php echo date('Y'); ?>">September <?php echo date('Y'); ?>
                                        </option>
                                        <option value = "October <?php echo date('Y'); ?>">October <?php echo date('Y'); ?></option>
                                        <option value = "November <?php echo date('Y'); ?>">November <?php echo date('Y'); ?>
                                        </option>
                                        <option value = "December <?php echo date('Y'); ?>">December <?php echo date('Y'); ?>
                                        </option>
                                        <option value = "January <?php echo date('Y') + 1; ?>">January <?php echo date('Y') + 1; ?></option>
                                        <option value = "February <?php echo date('Y') + 1; ?>">February <?php echo date('Y') + 1; ?>
                                        </option>
                                        <option value = "March <?php echo date('Y') + 1; ?>">March <?php echo date('Y') + 1; ?></option>
                                        <option value = "April <?php echo date('Y') + 1; ?>">April <?php echo date('Y') + 1; ?></option>
                                        <option value = "May <?php echo date('Y') + 1; ?>">May <?php echo date('Y') + 1; ?></option>
                                        <option value = "June <?php echo date('Y') + 1; ?>">June <?php echo date('Y') + 1; ?></option>
                                        <option value = "July <?php echo date('Y') + 1; ?>">July <?php echo date('Y') + 1; ?></option>
                                        <option value = "August <?php echo date('Y') + 1; ?>">August <?php echo date('Y') + 1; ?></option>
                                        <option value = "September <?php echo date('Y') + 1; ?>">September <?php echo date('Y') + 1; ?>
                                        </option>
                                        <option value = "October <?php echo date('Y') + 1; ?>">October <?php echo date('Y') + 1; ?></option>
                                        <option value = "November <?php echo date('Y') + 1; ?>">November <?php echo date('Y') + 1; ?>
                                        </option>
                                        <option value = "December <?php echo date('Y') + 1; ?>">December <?php echo date('Y') + 1; ?>
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    To:
                                </td>
                                <td>
                                    <select class="custom-select" name="to" id="terms" style="width:300px;">
                                        <option value = "<?=$payment->pay_to?>"><?=$payment->pay_to?> (Current)</option>
                                        <option value = "January <?php echo date('Y'); ?>">January <?php echo date('Y'); ?></option>
                                        <option value = "February <?php echo date('Y'); ?>">February <?php echo date('Y'); ?>
                                        </option>
                                        <option value = "March <?php echo date('Y'); ?>">March <?php echo date('Y'); ?></option>
                                        <option value = "April <?php echo date('Y'); ?>">April <?php echo date('Y'); ?></option>
                                        <option value = "May <?php echo date('Y'); ?>">May <?php echo date('Y'); ?></option>
                                        <option value = "June <?php echo date('Y'); ?>">June <?php echo date('Y'); ?></option>
                                        <option value = "July <?php echo date('Y'); ?>">July <?php echo date('Y'); ?></option>
                                        <option value = "August <?php echo date('Y'); ?>">August <?php echo date('Y'); ?></option>
                                        <option value = "September <?php echo date('Y'); ?>">September <?php echo date('Y'); ?>
                                        </option>
                                        <option value = "October <?php echo date('Y'); ?>">October <?php echo date('Y'); ?></option>
                                        <option value = "November <?php echo date('Y'); ?>">November <?php echo date('Y'); ?>
                                        </option>
                                        <option value = "December <?php echo date('Y'); ?>">December <?php echo date('Y'); ?>
                                        </option>
                                        <option value = "January <?php echo date('Y') + 1; ?>">January <?php echo date('Y') + 1; ?></option>
                                        <option value = "February <?php echo date('Y') + 1; ?>">February <?php echo date('Y') + 1; ?>
                                        </option>
                                        <option value = "March <?php echo date('Y') + 1; ?>">March <?php echo date('Y') + 1; ?></option>
                                        <option value = "April <?php echo date('Y') + 1; ?>">April <?php echo date('Y') + 1; ?></option>
                                        <option value = "May <?php echo date('Y') + 1; ?>">May <?php echo date('Y') + 1; ?></option>
                                        <option value = "June <?php echo date('Y') + 1; ?>">June <?php echo date('Y') + 1; ?></option>
                                        <option value = "July <?php echo date('Y') + 1; ?>">July <?php echo date('Y') + 1; ?></option>
                                        <option value = "August <?php echo date('Y') + 1; ?>">August <?php echo date('Y') + 1; ?></option>
                                        <option value = "September <?php echo date('Y') + 1; ?>">September <?php echo date('Y') + 1; ?>
                                        </option>
                                        <option value = "October <?php echo date('Y') + 1; ?>">October <?php echo date('Y') + 1; ?></option>
                                        <option value = "November <?php echo date('Y') + 1; ?>">November <?php echo date('Y') + 1; ?>
                                        </option>
                                        <option value = "December <?php echo date('Y') + 1; ?>">December <?php echo date('Y') + 1; ?>
                                        </option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input class='btn btn-success btn-user btn-lg' type='submit' name='submit'
                                        value='Submit'></td>
                        </form>
                        </tr>
                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
