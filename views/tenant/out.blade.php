@template('layouts.tenant')


@section('content')
    <h1 class="h3 mb-2 text-gray-800" align="center">Tenant-out Form.</h1>
    <p style="color:red;"><b><b>Please fill the required information upon tenant leaving the House.</b></b></p>

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
                                    Tenant:
                                </td>
                                <td>
                                    <select class="custom-select" readonly name="tenant" style="width:300px;" required>
                                        <option value="<?= Codx\Comic\Auth::user()->tenant_id ?>">
                                            <?= Codx\Comic\Auth::user()->fname ?> <?= Codx\Comic\Auth::user()->lname ?>
                                        </option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Condition of the Key and its Holder:
                                </td>
                                <td>
                                    <select class="custom-select" name="key" style="width:300px;" required>
                                        <option value = "" disabled selected>Please choose...</option>
                                        <option value = "Good">Good</option>
                                        <option value = "Average">Average</option>
                                        <option value = "Bad">Bad</option>
                                        <option value = "No key holder">No key holder</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Condition of the Electricity Remote:
                                </td>
                                <td>
                                    <select class="custom-select" name="remote" style="width:300px;" required>
                                        <option value = "" disabled selected>Please choose...</option>
                                        <option value = "Good">Good</option>
                                        <option value = "Average">Average</option>
                                        <option value = "Bad">Bad</option>
                                        <option value = "No remote">No remote</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Number of bulbs:
                                </td>
                                <td>
                                    <select class="custom-select" name="nbulb" style="width:300px;" required>
                                        <option value = "" disabled selected>Please choose...</option>
                                        <option value = "1">1</option>
                                        <option value = "2">2</option>
                                        <option value = "3">3</option>
                                        <option value = "0">0</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Condition of the Bulbs:
                                </td>
                                <td>
                                    <select class="custom-select" name="bulb" style="width:300px;" required>
                                        <option value = "" disabled selected>Please choose...</option>
                                        <option value = "Good">Good</option>
                                        <option value = "Average">Average</option>
                                        <option value = "Bad">Bad</option>
                                        <option value = "Some missing">Some missing</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Condition of the paint on the wall:
                                </td>
                                <td>
                                    <select class="custom-select" name="paint" style="width:300px;" required>
                                        <option value = "" disabled selected>Please choose...</option>
                                        <option value = "Good">Good</option>
                                        <option value = "Average">Average</option>
                                        <option value = "Bad">Bad</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Condition of the Windows:
                                </td>
                                <td>
                                    <select class="custom-select" name="window" style="width:300px;" required>
                                        <option value = "" disabled selected>Please choose...</option>
                                        <option value = "Good">Good</option>
                                        <option value = "Average">Average</option>
                                        <option value = "Bad">Bad</option>
                                        <option value = "Some broken or missing">Some broken or missing</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Condition of the Toilet Sink:
                                </td>
                                <td>
                                    <select class="custom-select" name="tsink" style="width:300px;" required>
                                        <option value = "" disabled selected>Please choose...</option>
                                        <option value = "Good">Good</option>
                                        <option value = "Average">Average</option>
                                        <option value = "Bad">Bad</option>
                                        <option value = "Broken">Broken</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Condition of the Normal Sink:
                                </td>
                                <td>
                                    <select class="custom-select" name="wsink" style="width:300px;" required>
                                        <option value = "" disabled selected>Please choose...</option>
                                        <option value = "Good">Good</option>
                                        <option value = "Average">Average</option>
                                        <option value = "Bad">Bad</option>
                                        <option value = "Broken">Broken</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Condition of the Door Lock:
                                </td>
                                <td>
                                    <select class="custom-select" name="lock" style="width:300px;" required>
                                        <option value = "" disabled selected>Please choose...</option>
                                        <option value = "Good">Good</option>
                                        <option value = "Average">Average</option>
                                        <option value = "Bad">Bad</option>
                                        <option value = "Broken">Broken</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Condition of the Toilet's Door Lock:
                                </td>
                                <td>
                                    <select class="custom-select" name="tlock" style="width:300px;" required>
                                        <option value = "" disabled selected>Please choose...</option>
                                        <option value = "Good">Good</option>
                                        <option value = "Average">Average</option>
                                        <option value = "Bad">Bad</option>
                                        <option value = "Broken">Broken</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span style="color:red;"><b><b>Please outline in details the concerns pertaining the
                                                above items.</b></b></span>
                                    <br />Comments:
                                </td>
                                <td>
                                    <textarea class='form-control' name="msg" required><?php echo @$msg; ?></textarea>
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
