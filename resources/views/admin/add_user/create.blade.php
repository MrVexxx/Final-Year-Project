@extends('admin.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin/add_user" class="btn btn-success btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/admin/add_user" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="text" name="email">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" class="form-control" type="text" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Save</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
