@extends('user.master')

@section('content')

    <div class="col-12 grid-margin stretch-card mt-5">
        <div class="card mt-5">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-white table-dark">
                        <thead>
                            <tr>
                                <th class="text-info">Doctor Name</th>
                                <th class="text-info">Date</th>
                                <th class="text-info">Time</th>
                                <th class="text-info"> Message</th>
                                <th class="text-info">Status</th>
                                <th class="text-info">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($myAppoint as $appointment)
                            <tr>
                                <td>{{ $appointment->doctor }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->time }}</td>
                                <td>{{ $appointment->message }}</td>
                                <td>{{ $appointment->status }}</td>
                                <td>
                                    <a href="{{ route('cancel_appointment',['id'=>$appointment->id])}}" onclick="return confirm('Are you sure delete this data?')" class="btn btn-sm btn-primary">Cancel</a>
                                </td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
