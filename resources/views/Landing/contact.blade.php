@extends('main-landing')
@section('title', 'Contact')
@section('content')

<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
<div class="google-map mt-0" style="height: 500px;">
    <iframe style="width: 100%;height: 100%;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d38972.35707924647!2d107.584532!3d-7.1148043!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e689500647eb26f%3A0xc24583d9c85bc2f9!2sSaung%20Kerja%20Kelompok%20Tani%20Hutan%20ADUH%20(KTH%202)%20LMDH%20Bukit%20Amanah!5e1!3m2!1sid!2sid!4v1777085374733!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="container">

    <div class="row py-4">
        <div class="col-lg-6">

            <h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
            <p class="mb-4">Get in touch with us</p>

            <form id="contactForm" class="p-4 shadow rounded bg-white">
                <div class="row">
                    <div class="form-group col-lg-6 mb-3">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Your name" required>
                    </div>
                    <div class="form-group col-lg-6 mb-3">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Your email" required>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="form-group mb-3">
                    <label>Message</label>
                    <textarea class="form-control" name="message" rows="5" placeholder="Write your message..." required></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-modern w-100">
                    Kirim ke WhatsApp
                </button>
            </form>

        </div>
        <div class="col-lg-6">

            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                <ul class="list list-icons list-icons-style-2 mt-2">
                    <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> LMDH Bukit Amanah Gunung Puntang</li>
                    <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong>+62 823-1507-8798</li>
                    {{-- <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="">mail@example.com</a></li> --}}
                </ul>
            </div>

        </div>

    </div>

</div>

@endsection