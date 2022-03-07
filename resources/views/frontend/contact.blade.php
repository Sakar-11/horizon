@extends('frontend/body/main_master')
@section('frontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact Us</h2>
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <h3><span>Contact Us</span></h3>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>Suite 11 -6 Floor - St. James House, Pendleton Way, Salford, M6 5FW</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>Info@horizonipm.co.uk</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>07551703755</p>
                    </div>
                </div>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Suite 11 -6 Floor - St. James House, Pendleton Way, Salford, M6 5FW&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="{{url('contact')}}" method="POST" class="php-email-form">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name *" required>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email *" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject *" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message *" required></textarea>
                        </div>
                        <div class="my-3">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->


@endsection