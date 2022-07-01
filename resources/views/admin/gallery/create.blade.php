@extends('admin.dashboard')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin/gallery" class=" btn badge-primary btn-sm">Back</a>
                    </div>

                    <div class="card-body">

                        <form action="/admin/gallery" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input id="image" class="form-control" type="file" name="image" accept="image/*">
                            </div>
                            <button type="submit" class="btn badge-primary btn-sm">Save</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
