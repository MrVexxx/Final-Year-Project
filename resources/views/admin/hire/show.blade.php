@extends('admin.dashboard')
@section('content')
    <div class="card">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin/hire" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <address>
                            <img src="{{ asset($hire->image) }}" alt="" style="height: 25vh; width:25vw" ><br>
                            Hire Name : {{ $hire->name }} <br>
                            Mobile No : {{ $hire->mobile_no }} <br>
                            Date : {{ $hire->date }} <br>
                            Month : {{ $hire->month }} <br>
                            Remarks : {{ $hire->description }} <br>
                        </address>
                        <form action="/admin/hire/{{ $hire->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class=" col-md-3 form-group">
                                <label for="status">Select Status</label>
                                <select id="status" class="form-control" name="status">
                                    <option value="pending">Pending</option>
                                    <option value="approved">Approved</option>
                                    <option value="reject">Reject</option>
                                    <option value="cancel">Cancel</option>
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
