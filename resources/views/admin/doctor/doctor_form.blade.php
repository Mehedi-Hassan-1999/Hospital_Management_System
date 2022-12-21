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

{{--                @if(session()->has('message'))--}}
{{--                    <div class="alert alert-success">--}}
{{--                        <button type="button" class="close" data-dismiss="alert">--}}
{{--                            X--}}
{{--                        </button>--}}
{{--                    {{session()->get('message')}}--}}
{{--                    </div>--}}
{{--                @endif--}}

                <h1 class="card-title text-center fs-1 fw-bold text-warning">Add Doctor Form</h1>
                <form class="forms-sample" action="{{ route('add_doctor') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="doctor_name">Doctor Name</label>
                        <input type="text" class="form-control text-light bg-dark" name="doctor_name" id="doctor_name" placeholder="Doctor Name">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control text-light bg-dark" name="phone" id="phone" placeholder="Phone">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control text-light bg-dark" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="speciality">Speciality</label>
                        <select class="form-control text-light bg-dark" name="speciality" id="speciality">
                            <option value="" selected>Selected</option>
                            <option value="heart">heart</option>
                            <option value="skin">Skin</option>
                            <option value="cardiology">Cardiology</option>
                            <option value="neurology">Neurology</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="room">Room No</label>
                        <input type="text" class="form-control text-light bg-dark" name="room" id="room" placeholder="Room No">
                    </div>

                    <div class="form-group">
                        <label for="week">Day Schedule</label>
                        <input type="text" class="form-control text-light bg-dark" name="week" id="week" placeholder="What day does the doctor available">
                    </div>

                    <div class="form-group">
                        <label for="time">Time Schedule</label>
                        <input type="text" class="form-control text-light bg-dark" name="time" id="time" placeholder="Time Schedule">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control text-light bg-dark" name="address" id="address" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                            <input type="file" class="form-control text-light bg-dark" name="image" id="image" placeholder="Image">
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
