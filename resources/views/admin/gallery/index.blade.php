@extends('admin.dashboard')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin/gallery/create" class="btn badge-primary btn-sm">Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gallery as $index => $item)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td><img src="{{ asset($item->image) }}" class="card-img img-fluid" alt=""
                                                style="height: 25vh; width:25vw"></td>

                                        <td>
                                            <a href="/admin/gallery/{{ $item->id }}/edit"
                                                class="btn badge badge-primary btn-sm">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
