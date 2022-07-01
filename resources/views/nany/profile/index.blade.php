@extends('nany.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        @if (!empty($profile))
                            <h5>Profile</h5>
                        @else
                            <a href="/nany/profile/create" class="btn bg-pink btn-sm">Add Profile</a>
                        @endif

                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Expected_salary</th>
                                    <th>skills</th>
                                    <th>Categories</th>
                                    <th>Qualification</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($profile))
                                    <tr>
                                        <td>{{ $profile->user->name }}</td>
                                        <td>{{ $profile->age }}</td>
                                        <td>{{ $profile->gender }}</td>
                                        <td>{{ $profile->salary }}</td>



                                        <td>
                                            @foreach ($profile->profile_skills as $index => $item)
                                                <span class="badge bg-blue">{{ $item->skill->name }}</span>
                                            @endforeach
                                        </td>

                                        <td>

                                            <span class="badge bg-blue">{{ $profile->category->name }}</span>

                                        </td>
                                        <td><img src="{{ asset($profile->qualification) }}" width="64" alt="" srcset="">
                                        </td>
                                        <td><img src="{{ asset($profile->image) }}" width="64" alt=""></td>


                                        <td>
                                            <a href="/nany/profile/{{ $profile->id }}/edit"
                                                class="badge bg-info">Edit</a>
                                        </td>
                                    </tr>
                                @endif


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
