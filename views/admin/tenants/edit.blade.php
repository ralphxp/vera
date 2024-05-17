@template('layouts.admin')

@section('content')
    <h1 class="h3 mb-2 text-gray-800" align = "center">Tenant</h1>
    <p style="color:red;"><b><b>Please choose a tenant to change his or her info from the table showing tenant
                information.</b></b></p>


    <!-- DataTales Example -->
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
                                    Tenant ID:
                                </td>
                                <td><input type='text' class='form-control form-control-user' name='id'
                                        value = "<?= $tenant->tenant_id ?>" readonly></td>
                            </tr>

                            <tr>
                                <td>
                                    Status:
                                </td>
                                <td>
                                    <select class="custom-select" name="status" style="width:300px;">
                                        <option value = "0">Payment Pending.</option>
                                        <option value = "1">Account Active.</option>
                                        <option value = "2">Contact the System Administrator.</option>
                                        <option value = "3">Contract has Expired.</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class='btn btn-success btn-user btn-lg' type='submit' name='submit'
                                        value='Edit'></td>
                        </form>
                        <tr>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
@endsection
