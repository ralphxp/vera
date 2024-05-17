@template('layouts.admin')

@section('content')
    <h1 class="h3 mb-2 text-gray-800" align = "center">Messages</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">

                    <tbody>
                        <form action="" method = "POST">
                            <tr>
                                <td>
                                    To:
                                </td>
                                <td><input type='text' class='form-control form-control-user'
                                        name='pno' ></td>
                            </tr>
                            <tr>
                                <td>
                                    Message:
                                </td>
                                <td>
                                    <textarea class='form-control' name="msg"><?=$msg|'' ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class='btn btn-dark btn-user btn-lg' type='submit' name='smsg'
                                        value='Send Message'></td>
                        </form>
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
