@extends('customer.dashboard')
@section('content')
    <div class="container">

        <h3 class="fw-bold mb-4" style=" color: purple; font-family :'Dancing Script', cursive ">
            Customer Status</h3>
        <div class="row">

            @foreach ($hire as $item)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset($item->profile->image) }}" width="100%" alt="" height="160vh">
                        <div class="card-body" style="font-weight: bold">
                            Name : {{ $item->profile->user->name }} <br>
                            Month : {{ $item->month }} <br>
                            Hire Date : {{ $item->date }} <br>
                            Remarks : <span class="badge bg-success  my-2">{{ $item->description }}</span>
                            <br>
                            Status :
                            <span
                                class="{{ $item->status == 'approved' ? 'badge bg-success' : 'badge bg-warning' }}">{{ $item->status }}</span>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection
