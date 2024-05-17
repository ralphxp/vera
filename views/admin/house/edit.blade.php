@template('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800" align = "center">House</h1>
    <p style="color:red;"><b><b>Please choose a house to change from the table showing house information.</b></b></p>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <h4 style="color:blue">
                <?= $message ? $message : '' ?>
            </h4>
            <div class="table-responsive">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">

                    <tbody>
                        <form action="" method ="post">
                            <tr>
                                <td>
                                    House ID:
                                </td>
                                <td><input type='text' class='form-control form-control-user' name='id'
                                        value = "{{ __($house->house_id) }}" readonly></td>
                            </tr>

                            <tr>
                                <td>
                                    House Name:
                                </td>
                                <td><input type='text' class='form-control form-control-user' name='house_name'
                                        value = "{{ __($house->house_name) }}"></td>
                            </tr>

                            <tr>
                                <td>
                                    Price:
                                </td>
                                <td><input type='text' class='form-control form-control-user' name='rent_per_month'
                                        value = "{{ __($house->rent_per_month) }}"></td>
                            </tr>

                            <tr>
                                <td>
                                    Compartment:
                                </td>
                                <td>
                                    <select type='text' class='form-control form-control-user' name='compartment'>
                                        <option <?= $house->compartment == 'yes' ? 'selected' : '' ?> value="yes">Yes
                                        </option>
                                        <option <?= $house->compartment == 'no' ? 'selected' : '' ?> value="no">
                                            No</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Status:
                                </td>
                                <td>
                                    <select type='text' class='form-control form-control-user' name='status'>
                                        <option <?= $house->status == 'Empty' ? 'selected' : '' ?> value="Empty">Empty
                                        </option>
                                        <option <?= $house->status == 'Occupied' ? 'selected' : '' ?> value="Occupied">
                                            Occupied</option>
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
