@extends('frontend.pages.app')
@section('content')
    <div class="py-5">
        <div class="container">
            <h1 class=" fs-1 fw-bolder mb-3" style="color: purple; font-family :'Dancing Script', cursive">Want To Hire Nany
            </h1>
            <div class="row">
                @foreach ($nany as $item)
                    <div class="col-md-3">
                        <div class="card" style="width: 14rem ">
                            <div class="card-header bg-white-50">
                                @if (count($item->profiles) > 0)
                                    <a href="/nany/{{ $item->profiles[0]->id }}/add" class="btn btn-primary btn-sm">
                                        Hire Nany
                                    </a>
                                @endif

                            </div>
                            <img src="{{ asset($item->profiles[0]->image) }}" class="card-img-top img-fluid" alt="..."
                                style="height: 8rem">
                            <div class="card-body fw-bold fw-light">
                                <div class="text small mb-2">
                                    <small class="">Name : {{ $item->name }} <br>
                                        Age : {{ $item->profiles[0]->age }} <br>
                                        Expected Salary : {{ $item->profiles[0]->salary }}/month <br>
                                        Skills: @foreach ($item->profiles[0]->profile_skills as $skill)
                                            <span class="badge bg-success">{{ $skill->skill->name }}</span>
                                        @endforeach
                                        <br>
                                        Category: <span class="badge bg-success"> {{ $item->profiles[0]->category->name }}

                                        </span> <br>




                                    </small>
                                </div>



                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
