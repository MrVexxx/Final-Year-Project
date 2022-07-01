@extends('admin.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin/category" class="btn btn-success btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/admin/skill" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Skill *</label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>
                            <button type="submit">Save Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
