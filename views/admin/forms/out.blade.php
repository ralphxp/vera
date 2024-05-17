@template('layouts.admin')


@section('content')
    <h1 class="h3 mb-2 text-gray-800" align="center">Tenant-Out Form.</h1>
    <p style="color:red;"><b><b>Please fill the required information upon tenant leaving the House.</b></b></p>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">

                    <tbody>
                        <form action="" method = "POST">
                            <tr>
                                <td>
                                    Search for a tenant:
                                </td>
                                <td>
                                    <select class="custom-select" name="tenant" style="width:300px;" required>
                                        <option value = "" disabled selected>Please choose...</option>
                                        @foreach ($tenants as $tenant)
                                            <option value="{{__($tenant->tenant_id)}}">{{__($tenant->fname)}} {{__($tenant->lname)}}</option>
                                        @endforeach
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
                        <tr>
                            <?php
                            if (isset($_POST['submit'])) {
                                $id = $_POST['tenant'];
                                $query1 = "SELECT * FROM contract WHERE tenant_id = '$id' AND status = 'Inactive'";
                                $result2 = mysqli_query($con, $query1);
                                $row1 = mysqli_fetch_assoc($result2);
                                do {
                                    $cid = $row1['contract_id'];
                                    $row1 = mysqli_fetch_assoc($result2);
                                } while ($row1);
                                $h_key = $_POST['key'];
                                $remote = $_POST['remote'];
                                $nbulb = $_POST['nbulb'];
                                $bulb = $_POST['bulb'];
                                $paint = $_POST['paint'];
                                $window = $_POST['window'];
                                $tsink = $_POST['tsink'];
                                $wsink = $_POST['wsink'];
                                $lock = $_POST['lock'];
                                $tlock = $_POST['tlock'];
                            
                                $msg = check($_POST['msg']);
                                $date = date('Y-m-d');
                            
                                $query3 = "SELECT * FROM tenant_in WHERE contract_id = '$cid'";
                                $rs = mysqli_query($con, $query3);
                                if (mysqli_num_rows($rs) == 0) {
                                    $sql = "INSERT INTO tenant_out(`out_id`, `contract_id`, `stat_keyholder`, `stat_electricityRemote`, `no_bulbs`, `stat_bulbs`, `stat_paint`, `stat_Windows`, `stat_toiletSink`, `stat_washingSink`, `stat_doorLock`, `stat_toiletDoorLock`, `comments`, `date_reg`)
                                          VALUES (' ','$cid','$h_key','$remote','$nbulb','$bulb','$paint','$window','$tsink','$wsink','$lock','$tlock','$msg','$date')";
                                    mysqli_query($con, $sql);
                                    mysqli_close($con);
                                    echo "<script type='text/javascript'>alert('Your form has been submitted successfully');</script>";
                                    echo '<style>body{display:none;}</style>';
                                    echo '<script>window.location.href = "admin_home.php";</script>';
                                } else {
                                    echo "<script type='text/javascript'>alert('You have already filled the form. Thank You.');</script>";
                                    echo '<style>body{display:none;}</style>';
                                    echo '<script>window.location.href = "admin_home.php";</script>';
                                }
                            }
                            ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
