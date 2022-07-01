@extends('customer.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/customer/rating" class="btn btn-success btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/customer/rating" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nanny Name </label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="rating">Rate Between 1-5 </label>
                                <input id="rating" class="form-control" min="1" max="5" maxlength="1" value="1" type="number" name="rating">
                            </div>
                            <button type="submit">Save Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
