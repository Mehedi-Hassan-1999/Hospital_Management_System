@extends('admin.master')

@section('content')

    <div class="col-12 grid-margin stretch-card mt-5">
        <div class="card mt-5">

            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{session()->get('message')}}
                </div>
            @endif

            <div class="card-body">
                <h1 class="card-title text-center fs-1 fw-bold text-success">Manage Doctor table</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-white table-dark">
                        <thead>
                            <tr>
                                <th class="text-info">SL</th>
                                <th class="text-info">Doctor Name</th>
                                <th class="text-info">Phone</th>
                                <th class="text-info">Email</th>
                                <th class="text-info"> Speciality</th>
                                <th class="text-info">Room No</th>
                                <th class="text-info">Day Schedule</th>
                                <th class="text-info">Time Schedule</th>
                                <th class="text-info">Address</th>
                                <th class="text-info">Image</th>
                                <th class="text-info">Action</th>
                            </tr>
                        </thead>

                        @php $i=1 @endphp

                        <tbody>
                        @foreach($doctors as $doctor)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $doctor->doctor_name }}</td>
                                <td>{{ $doctor->phone }}</td>
                                <td>{{ $doctor->email }}</td>
                                <td>{{ $doctor->speciality }}</td>
                                <td>{{ $doctor->room }}</td>
                                <td>{{ $doctor->week }}</td>
                                <td>{{ $doctor->time }}</td>
                                <td>{{ $doctor->address }}</td>

                                <td>
                                    <img src="{{ asset( $doctor->image ) }}" alt="" class="img-fluid">
                                </td>
                                <td>
                                    <a href="{{route('edit_doctor',['id'=>$doctor->id])}}" class="btn btn-sm btn-primary">Edit</a>

                                    <form action="{{ route('delete_doctor') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                                        <button type="submit" onclick="return confirm('Are you sure delete this data?')" class="btn btn-sm btn-danger bg-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
