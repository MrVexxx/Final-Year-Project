@extends('nany.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/nany/profile" class="bg-pink btn btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/nany/profile" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input id="name" class="form-control" type="text" name="name"
                                    value="{{ Auth::user()->name }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="city">City *</label>
                                <input id="city" class="form-control" type="text" name="city">
                            </div>

                            <div class="form-group">
                                <label for="address">Address *</label>
                                <input id="address" class="form-control" type="text" name="address">
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile *</label>
                                <input id="mobile" class="form-control" type="text" name="mobile">
                            </div>

                            <div class="form-group">
                                <label for="age">Age</label>
                                <input id="age" class="form-control" type="text" name="age">
                            </div>
                            <div class="form-group">
                                <label for="gender">Select Gender *</label>
                                <select id="gender" class="form-control" name="gender">
                                    <option value="female">Female
                                    </option>
                                    <option value="male">Male</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="salary">Expected Salary (per month)</label>
                                <input id="salary" class="form-control" type="numeric" name="salary">
                            </div>

                            <div class="form-group">
                                <label for="skills">Select Skills *</label>
                                <select id="skills" class="form-control select2" name="skills[]" multiple>
                                    @foreach ($skills as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Select category *</label>
                                <select id="category_id" class="form-control select2" name="category_id">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="qualification">Qualification</label>
                                <input id="qualification" class="form-control" name="qualification" type="file">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input id="image" class="form-control" type="file" name="image" accept="image/*">
                            </div>




                            <button type="submit">Save Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
