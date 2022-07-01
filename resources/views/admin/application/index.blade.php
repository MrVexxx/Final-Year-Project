@extends('admin.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Application For Nany</h5>
                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Age</th>
                                <th>Expected Salary (monthly)</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($application as $index => $item)
                                    <tr>

                                        <td>{{ ++$index }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->user->mobile }}</td>
                                        <td>{{ $item->user->address }}</td>
                                        <td>{{ $item->user->profiles[0]->age }}</td>
                                        <td>{{ $item->user->profiles[0]->salary }}</td>
                                        <td>
                                            <span
                                                class="{{ $item->status == 'approved' ? 'badge bg-success' : 'badge bg-warning' }}">{{ $item->status }}</span>
                                        </td>
                                        <td>
                                            <a href="/admin/application/{{ $item->id }}/edit"
                                                class="badge bg-primary">Show</a>
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
