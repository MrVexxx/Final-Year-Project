@extends('nany.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/nany/applications" class="btn bg-pink btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/nany/applications" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input id="name" class="form-control" type="text" name="name"
                                    value="{{ $profile->user->name }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile *</label>
                                <input id="mobile" class="form-control" type="text" name="mobile"
                                    value="{{ $profile->user->mobile }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="address">Address *</label>
                                <input id="address" class="form-control" type="numeric" name="address"
                                    value="{{ $profile->user->address }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input id="email" class="form-control" type="numeric" name="email"
                                    value="{{ $profile->user->email }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input id="city" class="form-control" type="text" name="city"
                                    value="{{ $profile->user->city }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="salary">Expected salary</label>
                                <input id="salary" class="form-control" type="text" name="salary"
                                    value="{{ $profile->salary }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <input id="gender" class="form-control" type="text" name="gender"
                                    value="{{ $profile->gender }}" disabled>
                            </div>

                            <a href="/nany/applications"> <button type="submit">Apply Now</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
