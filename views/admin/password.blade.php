@template('layouts.admin')

@section('content')
    <h1 class="h3 mb-2 text-gray-800" align="center">Change Password</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">

                    <tbody>
                        <form action="" method = "POST">
                            <tr>
                                <td>
                                    Old Password:
                                </td>
                                <td><input type='text' class='form-control form-control-user' name='change'></td>
                            </tr>
                            <tr>
                                <td>
                                    New Password:
                                </td>
                                <td><input type='password' class='form-control form-control-user' name='change1'></td>
                            </tr>
                            <tr>
                                <td>
                                    Repeat the new Password:
                                </td>
                                <td><input type='password' class='form-control form-control-user' name='change2'></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class='btn btn-success btn-user btn-lg' type='submit' name='submit'
                                        value='Change Password'></td>
                        </form>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
