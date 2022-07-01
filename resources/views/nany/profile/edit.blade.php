@extends('nany.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/nany/profile" class="btn btn-sm bg-pink">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/nany/profile/{{ $profile->id }}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input id="name" class="form-control" type="text" name="name"
                                    value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile *</label>
                                <input id="mobile" class="form-control" type="text" name="mobile"
                                    value="{{ Auth::user()->mobile }}">
                            </div>
                            <div class="form-group">
                                <label for="city">City *</label>
                                <input id="city" class="form-control" type="numeric" name="city"
                                    value="{{ Auth::user()->city }}">
                            </div>
                            <div class="form-group">
                                <label for="address">Address *</label>
                                <input id="address" class="form-control" type="numeric" name="address"
                                    value="{{ Auth::user()->address }}">
                            </div>


                            <div class="form-group">
                                <label for="age">Age</label>
                                <input id="age" class="form-control" type="text" name="age" value="{{ $profile->age }}">
                            </div>
                            <div class="form-group">
                                <label for="gender">Select Gender *</label>
                                <select id="gender" class="form-control" name="gender">
                                    <option value="female" {{ 'female' == $profile->gender ? 'selected' : '' }}>Female
                                    </option>
                                    <option value="male" {{ 'male' == $profile->gender ? 'selected' : '' }}>Male</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="salary">Expected Salary (per month)</label>
                                <input id="salary" class="form-control" type="numeric" name="salary"
                                    value="{{ $profile->salary }}">
                            </div>


                            <div class="form-group">
                                <label for="skills">Select Skills *</label>
                                <select id="skills" class="form-control select2" value="{{ $profile->skills }}"
                                    name="skills[]" multiple>
                                    @foreach ($skills as $skill)
                                        <option value="{{ $skill->id }}"
                                            @foreach ($profile->profile_skills as $selected) {{ $skill->id == $selected->skill_id ? 'selected' : '' }} @endforeach>
                                            {{ $skill->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="qualification">Qualification</label>
                                <input id="qualification" class="form-control" type="file" name="qualification">
                            </div>

                            <div class="my-2">
                                <img src="{{ asset($profile->qualification) }}" width="120" alt="">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input id="image" class="form-control" type="file" name="image" accept="image/*"
                                  >
                            </div>
                            <div class="my-2">
                                <img src="{{ asset($profile->image) }}" width="120" alt="">
                            </div>

                            <div class="form-group">
                                <label for="category_id">Categories</label>
                                <select id="category_id" class="form-control select2" name="category_id">
                                  @foreach ($categories as $item)
                                      <option value="{{ $item->id }}" {{ $item->id == $profile->category->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                  @endforeach
                                </select>
                            </div>

                            <button type="submit">Update Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
