@extends('admin.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin/skill" class="btn btn-sm btn-success">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/admin/skill/{{ $skill->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Skill name *</label>
                                <input id="name" class="form-control" type="text" name="name"
                                    value="{{ $skill->name }}">
                            </div>
                            <button type="submit">Update Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
