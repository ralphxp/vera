@template('layouts.admin')

@section('content')
    <h1 class="h3 mb-2 text-gray-800" align = "center">Tenants' Contact</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tenant's Name</th>
                            <th>Contact's Name</th>
                            <th>Occupation</th>
                            <th>Nature of the Relationshiip</th>
                            <th>Phone # 1</th>
                            <th>Phone # 2</th>
                            <th>Email</th>
                            <th>Postal Address</th>
                            <th>City</th>
                            <th>State</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($contacts as $contact)

                        <tr>
                            <td>{{__($contact->tenant->fname)}} {{__($contact->tenant->lname)}}</td>
                            <td>{{__($contact->fname1)}} {{__($contact->lname1)}}</td>
                            <td>{{__($contact->occupation1)}}</td>
                            <td>{{__($contact->nature1)}}</td>
                            <td><a href="tel:{{__($contact->pno1)}}">{{__($contact->pno1)}}</a></td>
                            <td><a href="tel:{{__($contact->pno2)}}">{{__($contact->pno2)}}</a></td>
                            <td><a href="mailto:{{__($contact->e_address1)}}">{{__($contact->e_address1)}}</a></td>
                            <td>{{__($contact->p_address1)}}</td>
                            <td>{{__($contact->city1)}}</td>
                            <td>{{__($contact->region1)}}</td>
                        </tr>
                        <tr>
                            <td>{{__($contact->tenant->fname)}} {{__($contact->tenant->lname)}}</td>
                            <td>{{__($contact->fname2|'')}} {{__($contact->lname2|'')}}</td>
                            <td>{{__($contact->occupation2|'')}}</td>
                            <td>{{__($contact->nature2|'')}}</td>
                            <td><a href="tel:{{__($contact->pno3|'')}}">{{__($contact->pno3|'')}}</a></td>
                            <td><a href="tel:{{__($contact->pno4|'')}}">{{__($contact->pno4|'')}}</a></td>
                            <td><a href="mailto:{{__($contact->e_address2|'')}}">{{__($contact->e_address2|'')}}</a></td>
                            <td>{{__($contact->p_address2|'')}}</td>
                            <td>{{__($contact->city2|'')}}</td>
                            <td>{{__($contact->region2|'')}}</td>
                        </tr>
                            
                        @endforeach

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
