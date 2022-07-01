@extends('frontend.pages.app')


@section('content')
    <!-- Banner -->
    @include('frontend.components.header')

    <!-- About -->
    <div class="container">
        <div class="row">
            <h1 class="mt-4">About Us</h1>
            <hr class="mt-2 mb-4">
            <div class="col-md-6 mt-4">
                <img src="/frontend/img/20.jpg" class="w-100" alt="">

            </div>
            <div class=" text col-md-6 mt-4">
                <p>We feel your pain. Finding a nanny is a tedious task. Of course, you can't trust any random person to look after your family. As a parent, you're naturally cautious and want to be certain the person you hire will take care of your child, elderly people, and your loving pets. It’s very hard for nowadays parents and Children to take caring their parents due to their busy schedules and other reason but no worries here we are providing our best service to find trustworthy nannies for parents, children, and pets. We also focus on experienced and friendly nannies for you. If you hire a nanny through this website, you can also pay through “Khalti”. The site also helps you find a nanny on short notice. Be sure to mention your expectations in detail to find the right person.
                </p>
                <p>Here you can also get the job of a care taker. Be sure to mention your experience and the positive part to get the job. We also give security and a very friendly place for the workers to work. We also provide full-time and half-time jobs to capable candidates.</p>
            </div>
        </div>
    </div>

    <!-- Service -->
    <div class="container-fluid mt-4 mb-4">
        <div class="text  ">
            <h1 class="d-flex justify-content-center text-center pt-4">Our Category</h1>
            <p class="d-flex justify-content-center text-center mt-4">These are the category of Services our Company Provides</p>
        </div>
        <div class="container">
            <div class="category mt-5">
                <div class="row gy-3 py-2">
                    @foreach ($categories as $category)
                        <div class="col-md-4">
                            <div class="card bg-dark text-white">
                                <div class="image">
                                    <p class="pt-2">{{ $category->name }}</p>

                                </div>
                                <div class="wishlist">

                                    <img src="{{ asset($category->image) }}" class="card-img" alt="...">
                                </div>


                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>



    </div>

    </div>

    <!-- Gallery -->
    <div class="container-fluid bg-white">
        <div class="container  mt-4 ">
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

        <!-- Contact -->
        <div class="container-fluid mt-5  ">

            <form action="/feedback" method="post">
                @csrf
                <div class="row p-4">
                    <h2><strong style="color: purple; font-weight: bold; font-size: 40px;">Get In Touch</strong></h2>
                    <div class="name mt-3">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group fs-5">
                                    <label for="name">First Name</label>
                                    <input id="name" class="form-control" type="text" name="name"
                                        value="{{ old('name') }}">
                                </div>

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group fs-5">
                                    <label for="lastname">Last Name</label>
                                    <input id="lastname" class="form-control" type="text" name="lastname"
                                        value="{{ old('lastname') }}">
                                </div>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                    </div>

                    <div class="email mt-3">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group fs-5">
                                    <label for="emmail">Email Address</label>
                                    <input id="email" class="form-control" type="email" name="email"
                                        value="{{ old('email') }}">
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group fs-5">
                                    <label for="phone">Phone</label>
                                    <input id="phone" class="form-control" type="text" name="phone"
                                        value="{{ old('phone') }}">
                                </div>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="message  mt-3">
                        <div class="form-group fs-5">
                            <label for="message">Message</label>
                            <textarea id="message" class="form-control" name="message" rows="5">{{ old('message') }}</textarea>
                        </div>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary my-2 btn-sm">Send Feedback</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    @endsection
