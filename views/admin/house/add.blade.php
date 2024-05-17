@template('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800" align = "center">Add House</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">

                    <tbody>
                        <form action="" method = "POST">
                            <tr>
                                <td>
                                    House Name:
                                </td>
                                <td><input type='text' class='form-control form-control-user' name='name' required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Is there a compartment?
                                </td>
                                <td>
                                    <select class="custom-select" name="compartment" id="terms" style="width:300px;"
                                        required>
                                        <option value = "Yes" id="1">Yes</option>
                                        <option value = "No" id="2">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Cost of the House:
                                </td>
                                <td>
                                    <input class="custom-select" name="cost" id="terms" style="width:300px;"
                                        required min="5" minlength="5">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class='btn btn-success btn-user btn-lg' type='submit' name='submit'
                                        value='Add the House'></td>
                        </form>
                        <tr>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
@endsection
