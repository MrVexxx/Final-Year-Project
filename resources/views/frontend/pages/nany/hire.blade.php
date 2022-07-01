@extends('frontend.pages.app')
@section('content')
    <div class="py-5">
        <div class="container">
            <a href="/nany" class="btn btn-primary btn-rounded btn-sm mb-4">Back</a>

            <div class="row">

                <form action="/nany/{{ request()->id }}/hire" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-4 fw-bold">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input id="name" class="form-control" type="text" name="name"
                                    value="{{ Auth::user()->name }}">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="image">Your Image</label>
                                <input id="image" class="form-control" type="file" name="image" accept="image/*">
                            </div>
                        </div>
                        <div class="col-md-3 fw-bold">
                            <div class="form-group">
                                <label for="mobile_no">Mobile</label>
                                <input id="mobile_no" class="form-control" type="number" name="mobile_no">
                            </div>
                            @error('mobile_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input id="address" class="form-control" type="text" name="address">
                            </div>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>

                    <div class="row fw-bold ">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="salary">Expected Salary</label>
                                <input id="salary" class="form-control" type="text" name="salary"
                                    value="{{ $profile->salary }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-3 fw-bold">
                            <div class="form-group">
                                <label for="month">Hire Month</label>
                                <input id="month" class="form-control" type="number" value="1" min="1" max="12"
                                    name="month">
                            </div>

                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="total">Total Amount(Rs)</label>
                                <input id="total" class="form-control" type="text" data-salary="{{ $profile->salary }}"
                                    value="{{ $profile->salary }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-3 fw-bold">

                            <div class="form-group">
                                <label for="date">Hired Date</label>
                                <input id="date" class="form-control" type="date" name="date">
                            </div>
                            @error('date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>
                    <div class="form-group mb-4 mt-4 fw-bold">
                        <label for="description">Remarks</label>
                        <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                    </div>


                    <button type="submit mt-4" class="btn btn-primary btn-rounded btn-sm">Hire Nany</button>

                </form>
            </div>

        </div>
    </div>
    <script>
        const total = document.getElementById('total')
        const month = document.getElementById('month')

        month.addEventListener('change', function(e) {
            const salary = parseInt(total.getAttribute('data-salary'))
            total.value = salary * month.value
        })
    </script>
@endsection
