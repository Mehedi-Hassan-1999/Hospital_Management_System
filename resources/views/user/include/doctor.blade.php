<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp fs-1 fw-bold">Our Doctors</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach($doctors as $doctor)
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img src="{{ $doctor->image }}" class="img-fluid img-rounded h-300" alt="Our Doctors">
                            <div class="meta">
                                <a href="#"><span class="mai-call"></span></a>
                                <a href="#"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">{{ $doctor->doctor_name }}</p>
                            <span class="text-sm text-grey">{{ $doctor->speciality }}</span><br>
                            <span class="text-sm text-grey">{{ $doctor->week }}</span><br>
                            <span class="text-sm text-grey">{{ $doctor->time }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
