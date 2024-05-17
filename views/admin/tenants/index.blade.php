@template('layouts.admin')

@section('content')
    <h1 class="h3 mb-2 text-gray-800" align = "center">Tenants</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Occupation</th>
                            <th>Phone # 1</th>
                            <th>Phone # 2</th>
                            <th>Email</th>
                            <th>Postal Address</th>
                            <th>City</th>
                            <th>Region</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($tenants as $tenant)
                            <tr>
                                <td>{{__($tenant->fname|'')}} {{__($tenant->lname|'')}}</td>
                                <td>{{__($tenant->occupation|'-')}}</td>
                                <td>{{__($tenant->p_no|'')}}</td>
                                <td>{{__($tenant->pno1|'')}}</td>
                                <td>{{__($tenant->e_address|'')}}</td>
                                <td>{{__($tenant->p_address|'')}}</td>
                                <td>{{__($tenant->city)}}</td>
                                <td>{{__($tenant->region)}}</td>
                                <td
                                <?=$tenant->status == 0?"style = 'color:orange;'":"style = 'color:green;'"?>
                                ><?=$tenant->status==0?'Pending':'Paid'?></td>
                                <td>
                                    <a href='tenants/edit/<?=$tenant->tenant_id?>' class='btn btn-success btn-circle'><i class='fas fa-edit'></i></a>
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
                            <td><b><b>TOTAL NUMBER OF TENANTS</b></b></td>
                            <td style = 'color:red;'><b><b><?=$tenants->count()?></b></b></td>
                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/demo/datatables-demo.js"></script>
@endsection
