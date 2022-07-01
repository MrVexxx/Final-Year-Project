@extends('admin.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Rating</th>
                                   

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ratings as $index => $item)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>

                                            <?php 
                                                    for ($i=1; $i <= $item->rate; $i++) { 
                                                       echo " <i class='fa-solid fa-star text-warning'></i>";
                                                    }
                                                ?>
                                        </td>
                                        
                                       
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
