@extends('admin.master')

@section('content')

    <div class="col-12 grid-margin stretch-card mt-5">
        <div class="card mt-5">
            <div class="card-body">
                <h1 class="card-title text-center fs-1 fw-bold text-success">Appointment Manage</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-white table-dark">
                        <thead>
                        <tr>
                            <th class="text-info">SL</th>
                            <th class="text-info">Patient Name</th>
                            <th class="text-info">Email</th>
                            <th class="text-info">Date</th>
                            <th class="text-info">Time</th>
                            <th class="text-info"> Doctor Name</th>
                            <th class="text-info">Phone</th>
                            <th class="text-info">Message</th>
                            <th class="text-info">Status</th>
                            <th class="text-info">Action</th>
                            <th class="text-info">Send Mail</th>
                        </tr>
                        </thead>

                        @php $i=1 @endphp

                        <tbody>
                        @foreach($appointments as $appointment)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $appointment->name }}</td>
                                <td>{{ $appointment->email }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->time }}</td>
                                <td>{{ $appointment->doctor }}</td>
                                <td>{{ $appointment->phone }}</td>
                                <td>{{ substr($appointment->message,0,20) }}</td>
                                <td>{{ $appointment->status }}</td>
                                <td>
                                    <a href="{{route('approved',['id'=>$appointment->id])}}" class="btn btn-sm btn-primary">Approved</a>

                                    <a href="{{route('canceled',['id'=>$appointment->id])}}" class="btn btn-sm btn-danger">Canceled</a>

                                </td>
                                <td>
                                    <a href="{{route('sendMail',['id'=>$appointment->id])}}" class="btn btn-sm btn-warning">Send Mail</a>

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
