@extends('frontend.pages.app')
@section('content')
    <div class="container mt-4 mb-4">
        <div class="row">
           
                    @foreach ($nannys as $item)
                        <div class="col-md-4">
                            <div class="card mb-4">

                                <div class="card-header d-flex bg-success ">

                                    <form action="/wishlist/{{ $item->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="profile_id" value="{{ $item->id }}">
                                        <a href="/nany/{{ $item->profile_id }}/add" class="btn btn-warning btn-sm mx-2">
                                            Hire Nany
                                        </a>
                                        <button type="submit" class="btn btn-sm btn-primary"> Remove from Wishlist
                                            <i class="fa fa-heart" aria-hidden="true"> </i>
                                        </button> <br>
                                </div>



                                <img src="{{ asset($item->profile->image) }}" class="card-img" alt="..."
                                    style="height: 40vh; width:100%">
                                <div class="text fw-bold m-2">
                                    Name : {{ $item->profile->user->name }} <br>
                                    Age : {{ $item->profile->age }} <br>
                                    Expected Salary : {{ $item->profile->salary }}/permonth <br>
                                    Skills: @foreach ($item->profile->profile_skills as $skill)
                                        <span class="badge bg-success">{{ $skill->skill->name }}</span>
                                    @endforeach
                                    <br>
                                    {{-- Category: <span class="badge bg-success"> {{ $item->category->name }} --}}

                                </div>





                                </form>

                            </div>

                        </div>
                    @endforeach
             
        </div>
    </div>
@endsection
