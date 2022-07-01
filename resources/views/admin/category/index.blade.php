@extends('admin.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin/category/create" class=" btn btn-primary btn-sm">Add Category</a>
                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $index => $item)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td><img src="{{ asset($item->image) }}" width="100" alt=""></td>
                                        <td>
                                            <form action="/admin/category/{{ $item->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="/admin/category/{{ $item->id }}/edit"
                                                    class="btn  btn-primary">Edit</a>

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
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
