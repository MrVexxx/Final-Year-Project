@extends('admin.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Mobile No</th>
                                <th>Hire Date</th>
                                <th>Hire Month</th>
                                
                                <th>Status</th>
                                <th>Action</th>

                            </thead>

                            <tbody>
                                @foreach ($hire as $index => $item)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile_no }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->month }}</td>
                                        
                                        <td>
                                            <span
                                                class="{{ $item->status == 'approved' ? 'badge bg-success' : 'badge bg-warning' }}">{{ $item->status }}</span>
                                        </td>
                                        <td>
                                            <a href="/admin/hire/{{ $item->id }}/edit" class="badge bg-primary">Show</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
