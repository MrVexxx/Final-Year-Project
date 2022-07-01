@extends('admin.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin/category" class=" btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/admin/category/{{ $category->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name"
                                    value="{{ $category->name }}">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input id="image" class="form-control" type="file" name="image" accept="image/*"
                                    value="{{ $category->image }}">
                            </div>
                            <button type="submit" class=" btn btn-primary btn-sm">Save Record</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
