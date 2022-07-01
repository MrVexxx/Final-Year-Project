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
                        <form action="/admin/add_user/{{ $add_user->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name"
                                    value="{{ $add_user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="text" name="email"
                                    value="{{ $add_user->email }}">
                            </div>

                            <div class=" form-group">
                                {{-- <label for="password">Password</label> --}}
                                <input hidden id="password" class="form-control" type="text" name="password"
                                    value="{{ $add_user->password }}">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
