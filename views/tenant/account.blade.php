@template('layouts.tenant')

@section('content')
    <h1 class="h3 mb-2 text-gray-800" align="center">Personal Information</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">

                    <tbody>
                        <tr>
                            <td> Full Name:</td>
                            <td style = 'color:blue;'>{{ __($user->fname) }} {{ __($user->lname) }}</td>

                        </tr>
                        <tr>
                            <td> Occupation:</td>
                            <td style = 'color:blue;'>{{ __($user->occupation) }}</td>

                        </tr>
                        <tr>
                            <td> Phone Number 1:</td>
                            <td style = 'color:blue;'>{{ __($user->p_no) }}</td>

                        </tr>
                        <tr>
                            <td> Phone number 2:</td>
                            <td style = 'color:blue;'>{{ __($user->pno1) }}</td>

                        </tr>
                        <tr>
                            <td> Email Adress:</td>
                            <td style = 'color:blue;'>{{ __($user->e_address) }}</td>
                        </tr>

                        <tr>
                            <td> Home Adress:</td>
                            <td style = 'color:blue;'>{{ __($user->p_address) }}</td>
                        </tr>
                        <tr>
                            <td> City</td>
                            <td style = 'color:blue;'>{{ __($user->city) }}</td>
                        </tr>
                        <tr>
                            <td> State:</td>
                            <td style = 'color:blue;'>{{ __($user->region) }}</td>
                        </tr>
                        <tr>
                            <td> username:</td>
                            <td style = 'color:blue;'>{{ __($user->u_name) }}</td>
                        </tr>




                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
