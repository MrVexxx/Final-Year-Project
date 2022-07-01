@extends('frontend.pages.app')
@section('content')
    <div class="container mt-4 mb-4">
        <div class="row">
            @foreach ($nany as $item)
                <div class="col-md-4">
                    <div class="card">

                        <div class="card-header d-flex bg-success">
                            @if (count($item->user->profiles) > 0)
                                <a href="/nany/{{ $item->user->profiles[0]->id }}/add" class="btn btn-warning btn-sm mx-2">
                                    Hire Nany
                                </a>
                            @endif
                            <form action="/wishlist" method="post">
                                @csrf
                                <input type="hidden" name="profile_id" value="{{ $item->id }}">
                                @if (Auth::user())
                                    <button type="submit" class="btn btn-sm btn-danger"> Add to Wishlist
                                        <i class="fa fa-heart" aria-hidden="true"> </i>
                                    </button>
                                @else
                                    <a href="/login" class="btn btn-sm btn-primary">Add to Wishlist
                                        <i class="fa fa-heart" aria-hidden="true"> </i></a>
                                @endif
                            </form>

                        </div>



                        <img src="{{ asset($item->user->profiles[0]->image) }}" class="card-img" alt="..."
                            style="height: 40vh; width:100%">
                        <div class="text fw-bold m-2">
                            Name : {{ $item->user->name }} <br>
                            Age : {{ $item->user->profiles[0]->age }} <br>
                            Expected Salary : {{ $item->user->profiles[0]->salary }}/permonth <br>
                            Skills: @foreach ($item->user->profiles[0]->profile_skills as $skill)
                                <span class="badge bg-success">{{ $skill->skill->name }}</span>
                            @endforeach
                            <br>
                            Category: <span class="badge bg-success">
                                {{ $item->user->profiles[0]->category->name }}

                        </div>
                    </div>

                </div>
            @endforeach




        </div>
    </div>
@endsection
