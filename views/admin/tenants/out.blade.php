@template('layouts.admin')
@section('content')
    <h1 class="h3 mb-2 text-gray-800" align = "center">Tenant-Out Details</h1>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Contract ID</th>
                            <th>Name</th>
                            <th>Keyholder</th>
                            <th>Number of Bulbs</th>
                            <th>Bulbs</th>
                            <th>Paint</th>
                            <th>Windows</th>
                            <th>Toilet Sink</th>
                            <th>Washing Sink</th>
                            <th>Door Lock</th>
                            <th>Toilet Door Lock</th>
                            <th>Water Units</th>
                            <th>Comments</th>
                            <th>Date</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($tenantOut as $in)
                            <tr>
                                <td>{{__($in->contract_id)}}</td>
                                <td>{{__($in->contract->tenant->fname)}} {{__($in->contract->tenant->lname)}}</td>
                                <td>{{__($in->stat_keyholder)}}</td>
                                <td>{{__($in->no_bulbs)}}</td>
                                <td>{{__($in->stat_bulbs)}}</td>
                                <td>{{__($in->stat_paint)}}</td>
                                <td>{{__($in->stat_Windows)}}</td>
                                <td>{{__($in->stat_toiletSink)}}</td>
                                <td>{{__($in->stat_washingSink)}}</td>
                                <td>{{__($in->stat_doorLock)}}</td>
                                <td>{{__($in->stat_toiletDoorLock)}}</td>
                                <td>{{__($in->water_units)}}</td>
                                <td>{{__($in->comments)}}</td>
                                <td>{{__($in->date_reg)}}</td>
                                <td>{{__($in->status)}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
