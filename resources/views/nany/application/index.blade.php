@extends('nany.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/nany/applications/create" class="btn bg-pink btn-sm">Apply For Application</a>
                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>Age</th>
                                    <th>Expected Salary</th>

                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($application as $index => $item)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->user->mobile }}</td>
                                        <td>{{ $item->user->address }}</td>
                                        <td>{{ $item->user->email }}</td>
                                        <td>{{ $item->user->city }}</td>
                                        <td>{{ $item->user->profiles[0]->age }}</td>
                                        <td>{{ $item->user->profiles[0]->salary }}</td>

                                        <td>
                                            <span
                                                class="{{ $item->status == 'approved' ? 'badge bg-success' : 'badge bg-warning' }}">{{ $item->status }}</span>
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
