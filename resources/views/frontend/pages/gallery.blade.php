@extends('frontend.pages.app')
@section('content')
    <div class="container-fluid bg-white">
        <div class="container  mt-4 mb-4 ">
            <h1>Gallery</h1>
            <hr class="mb-4">
            <div class="gallery pt-4">
                <div class="row gy-3 py-2">
                    @foreach ($galleries as $gallery)
                        <div class="col-md-3">

                            <div class="card bg-dark text-white">
                                <img src="{{ asset($gallery->image) }}" class="card-img" alt="" height="auto">
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
