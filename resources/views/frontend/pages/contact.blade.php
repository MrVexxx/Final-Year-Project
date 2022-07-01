@extends('frontend.pages.app')
@section('content')
    <div class="container-fluid  ">

        <div>
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.89309303164!2d87.28287126449996!3d26.81153247089411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef41993467155d%3A0xe408789e9cfdf097!2sBhanu%20Chowk%2C%20Dharan%2056700!5e0!3m2!1sen!2snp!4v1648554865989!5m2!1sen!2snp" frameborder="0" allowfullscreen></iframe>
        </div>

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

    </div>
@endsection
