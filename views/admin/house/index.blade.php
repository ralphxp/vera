@template('layouts.admin')

@section('content')
    <h1 class="h3 mb-2 text-gray-800" align = "center">Houses</h1>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>House Name</th>
                            <th>Compartment</th>
                            <th>Rent per Month(NGN.)</th>
                            <th>Status of the House</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($houses as $house)
                            <tr>
                                <td>{{ __($house->house_name) }}</td>
                                <td>{{ __($house->compartment) }}</td>
                                <td>NGN. <?= number_format($house->rent_per_month) ?></td>
                                @if ($house->status != 'Empty')
                                    <td style = 'color:green;'>{{ __($house->status) }}</td>
                                @else
                                    <td style = 'color:red;'>{{ __($house->status) }}</td>
                                @endif

                                <td>
                                    <a href='/houses/delete/{{ __($house->house_id) }}/' class='btn btn-danger btn-circle'>
                                        <i class='fas fa-trash'></i>
                                    </a>
                                    <a href='houses/edit/{{ __($house->house_id) }}/' class='btn btn-success btn-circle'>
                                        <i class='fas fa-edit'></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <br />
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                    <tbody>

                        <tr>
                            <td><b><b>TOTAL NUMBER OF HOUSES</b></b></td>
                            <td><b><b><?= $houses->count() ?></b></b></td>
                        </tr>


                        <tr>
                            <td><b><b>TOTAL NUMBER OF <span style = 'color:green;'>OCCUPIED</span> HOUSES</b></b></td>

                            <td><b><b><span style = 'color:green;'>{{ __($occupied_houses) }}</span></b></b>
                            </td>
                        </tr>

                        <tr>
                            <td><b><b>TOTAL NUMBER OF <span style = 'color:red;'>EMPTY</span> HOUSES</b></b></td>
                            <td><b><b><span style = 'color:red;'>{{ __($empty_houses) }}</span></b></b></td>

                        </tr>

                        <tr>
                            <td><b><b>TOTAL NUMBER OF HOUSES <span style = 'color:green;'>WITH</span>
                                        COMPARTMENTS</b></b></td>
                            <td><b><b><span style = 'color:green;'>{{ __($comp_houses) }}</span></b></b>
                            </td>
                        </tr>

                        <tr>
                            <td><b><b>TOTAL NUMBER OF HOUSES <span style = 'color:red;'>WITHOUT</span>
                                        COMPARTMENTS</b></b></td>
                            <td><b><b><span style = 'color:red;'>{{ __($no_compartment) }}</span></b></b></td>

                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/js/demo/datatables-demo.js"></script>
@endsection
