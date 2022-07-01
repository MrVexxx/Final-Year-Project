@extends('frontend.pages.app')
@section('content')
    <div class="container-fluid ">

        <div class="text  ">
            <h1 class="d-flex justify-content-center text-center pt-4">Our Category</h1>
            <p class="d-flex justify-content-center text-center mt-4">These are the category of Services our Company Provides. Please Go through your desired category to Hire Caretaker According to your Need.</p>
        </div>
        <div class="container">
            <div class="category mt-5">
                <div class="row gy-3 py-2">
                    @foreach ($categories as $category)
                        <div class="col-md-4">
                            <div class="card bg-dark text-white">
                                <div class="image">
                                    <p class="pt-2">{{ $category->name }}</p>
                                    <div>
                                        <a href="/category/{{ $category->id }}"
                                            class="badge btn bg-primary p-1 m-2">Show</a>
                                    </div>

                                </div>
                                <div class="img">

                                    <img src="{{ asset($category->image) }}" class="card-img" alt="...">
                                </div>



                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection
