@extends('admin.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin/application" class="btn btn-success btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                       

                        <address>
                         <img src="{{ asset($applicant->user->profiles[0]->image) }}" alt="" style="width: 20vw; height:20vw"><br>
                            Applicant Name: {{ $applicant->user->name }} <br>
                            Mobile: {{ $applicant->user->mobile }} <br>
                            City: {{ $applicant->user->city }} <br>
                            Address: {{ $applicant->user->address }} <br>
                            Age: {{ $applicant->user->profiles[0]->age }} <br>
                            Gender: {{ $applicant->user->profiles[0]->gender }} <br>
                            Skills: @foreach ($applicant->user->profiles[0]->profile_skills as $item)
                                <span class="badge bg-indigo"> {{ $item->skill->name }}</span>
                            @endforeach <br>
                            Category: <span
                                class="badge bg-indigo">{{ $applicant->user->profiles[0]->category->name }}</span>
                            <br>

                            Qualification: <br>
                             <img src="{{ asset($applicant->user->profiles[0]->qualification) }}"
                                alt="" style="width: 18vw; height:18vw"><br>

                        </address>

                        <form action="/admin/application/{{ $applicant->id }}" method="post" >
                            @csrf
                            @method('put')
                            <div class=" col-md-3 form-group">
                                <label for="status">Select Status</label>
                                <select id="status" class="form-control" name="status">
                                    <option value="pending" {{ 'pending' == $applicant->status ? 'selected' : '' }}>
                                        Pending</option>
                                    <option value="approved" {{ 'approved' == $applicant->status ? 'selected' : '' }}>
                                        Approved</option>
                                    <option value="reject" {{ 'reject' == $applicant->status ? 'selected' : '' }}>Reject
                                    </option>
                                    <option value="cancel" {{ 'cancel' == $applicant->status ? 'selected' : '' }}>Cancel
                                    </option>
                                </select>

                                <button type="submit" class="my-2 btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
