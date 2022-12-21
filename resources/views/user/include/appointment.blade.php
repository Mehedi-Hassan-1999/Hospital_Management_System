<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form class="main-form" action="{{ route('appointment') }}" method="post">
            @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="name" class="form-control" placeholder="Full name">
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="Email address..">
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" name="date" class="form-control">
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="time" name="time" class="form-control">
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor" id="departement" class="custom-select">
                        <option value="" selected>Selected Doctor</option>
                        @foreach($doctors as $doctor)
                            <option value="{{ $doctor->doctor_name }}">{{ $doctor->doctor_name }} ---- Speciality: {{ $doctor->speciality }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <input type="text" name="phone" class="form-control" placeholder="Phone..">
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn bg-danger">Submit Request</button>
        </form>
    </div>
</div>
