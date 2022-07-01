@extends('frontend.pages.app')
@section('content')
    <div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Register as Nany
                        </div>
                        <div class="card-body">
                            <form action="/nany/register" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Full Name *</label>
                                    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                                </div>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input id="email" class="form-control" type="text" name="email" value="{{ old('email') }}">
                                </div>
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                                <div class="form-group">
                                    <label for="password">Password *</label>
                                    <input id="password" class="form-control" type="password" name="password">
                                </div>
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                                <div class="form-group">
                                    <label for="password_confirmation">Retype *</label>
                                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation">
                                </div>
                                @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                                <button type="submit" class="my-2 btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
