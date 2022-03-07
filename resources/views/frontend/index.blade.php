@extends('frontend/body/main_master')
@section('frontend')
<style>
    .swiper-slide {
        flex-shrink: 1 !important;
    }

    .item {
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 10px;
    }

    .item-card {
        transition: 0.5s;
        cursor: pointer;
        width: 20em;
    }

    .item-card-feedback {
        transition: 0.5s;
        cursor: pointer;
        width: 15em;
    }

    .item-card img {
        height: 300px;
    }

    .item-card-feedback img {
        height: 100px;
        width: 100px;
        margin: 0 auto;
        margin-top: 10px;
        border-radius: 45px;
    }

    .item-card-feedback h5 {
        padding: 0 10px !important;
        color: #333;
    }

    .item-card-feedback p {
        font-size: 12px;
        padding: 6px;
        color: #333;
    }

    .item-card-title {
        font-size: 15px;
        transition: 1s;
        cursor: pointer;
    }

    .item-card-title i {
        font-size: 15px;
        transition: 1s;
        cursor: pointer;
        color: #ffa710
    }

    .card-title i:hover {
        transform: scale(1.25) rotate(100deg);
        color: #18d4ca;

    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
        z-index: 10000;
    }

    #coaching {
        background: #05456b;
        color: #fff;
    }

    .card-text {
        height: 80px;
    }

    .card::before,
    .card::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        transform: scale3d(0, 0, 1);
        transition: transform .3s ease-out 0s;
        background: rgba(255, 255, 255, 0.1);
        content: '';
        pointer-events: none;
    }

    .card::before {
        transform-origin: left top;
    }

    .card::after {
        transform-origin: right bottom;
    }

    h5 {
        color: #333;
    }

    .card:hover::before,
    .card:hover::after,
    .card:focus::before,
    .card:focus::after {
        transform: scale3d(1, 1, 1);
    }
</style>


<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('frontend/assets/images/slider1.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown" data-aos="fade-up">Project Management <span>Consulting
                                </span>
                            </h2>
                            <a href="#services" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-aos="fade-up">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('frontend/assets/images/slider2.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown" data-aos="fade-up">Horizon EXPERTS In Training & <br>
                                <span>Project Management</span>
                            </h2>
                            <a href="#services" class="btn-get-started animate__animated animate__fadeInUp scrollto" data-aos="fade-up">Read More</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <h3>What We Offer To <span>Students</span></h3>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">TRAINING COURSES
                            </a></h4>
                        <p>Your chance to be an expert in Project Management industries and make a successful career
                            after completion of our courses.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">BOOKS & LIBRARY
                            </a></h4>
                        <p>Horizon International is committed with original syllabuses and books for each course we
                            provide to our trainees</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">CERTIFIED TEACHERS
                            </a></h4>
                        <p>Get professional education and reliable consultation by our team of certified teachers
                            and
                            instructors.

                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">CERTIFICATION
                            </a></h4>
                        <p>Upon successful completion receive a certificate showing your achievement for completing
                            one
                            of our rigorous classes.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Courses Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">
            <div class="section-title">
                <h2>Courses</h2>
                <h3>Check our <span>Courses</span></h3>
            </div>
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <a href="{{url('course/project-management-professional-pmp')}}">

                            <div class="card item-card card-block">
                                <img src="{{asset('frontend/assets/images/pmp.jpg')}}" alt="Photo of sunset">
                                <h5 class="card-title mt-3 mb-3 p-2">PROJECT MANAGEMENT PROFESSIONAL (PMP)</h5>
                            </div>
                        </a>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <a href="{{url('course/risk-management-professional-pmi-rmp')}}">

                            <div class=" card item-card card-block">
                                <img src="{{asset('frontend/assets/images/rmp.png')}}" class="testimonial-img" alt="">
                                <h5 class="card-title mt-3 mb-3 p-2">RISK MANAGEMENT PROFESSIONAL PMI-RMP®</h5>
                            </div>
                        </a>
                    </div><!-- End testimonial item -->
                    <!-- <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('frontend/assets/images/0c63e8a-270x283.jpg')}}" class="testimonial-img" alt="">
                            <h3>CAPM Certified Associate in Project Management (PMI-USA)</h3>
                        </div>
                    </div>End testimonial item -->

                    <div class="swiper-slide">
                        <a href="{{url('course/scheduling-professional-exam-preparation-pmi-sp')}}">
                            <div class=" card item-card card-block">
                                <img src="{{asset('frontend/assets/images/5-set-schedule-270x283.jpg')}}" class="testimonial-img" alt="">
                                <h5 class="card-title mt-3 mb-3 p-2">Scheduling Professional Exam preparation – PMI-SP</h5>
                            </div>
                        </a>
                    </div>
                    <!-- End testimonial item -->
                    <div class="swiper-slide">
                        <a href="{{url('course/agile-certified-practitioner-pmi-acp-pmi')}}">

                            <div class=" card item-card card-block">
                                <img src="{{asset('frontend/assets/images/acp2.jpg')}}" class="testimonial-img" alt="">
                                <h5 class="card-title mt-3 mb-3 p-2">Agile Certified Practitioner PMI-ACP® PMI</h5>

                            </div>
                        </a>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <a href="{{url('course/planning-scheduling-professional-psp')}}">
                            <div class=" card item-card card-block">
                                <img src="{{asset('frontend/assets/images/clock.jpg')}}" class="testimonial-img" alt="">
                                <h5 class="card-title mt-3 mb-3 p-2">PLANNING & SCHEDULING PROFESSIONAL PSP®</h5>
                            </div>
                        </a>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <a href="{{url('course/ccp-certified-cost-professional-aace-usa')}}">
                            <div class=" card item-card card-block">
                                <img src="{{asset('frontend/assets/images/ccp.jpg')}}" class="testimonial-img" alt="">
                                <h5 class="card-title mt-3 mb-3 p-2">CCP – Certified Cost Professional (AACE-USA)</h5>
                            </div>
                        </a>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3>YOU CAN LEARN</span></h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center mb-5 mb-lg-0 p-4">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Project Management</a></h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center mb-5 mb-lg-0 p-4">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Advanced Project Management</a></h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center mb-5 mb-lg-0 p-4">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">BIM Training</a></h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center mb-5 mb-lg-0 p-4">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">Cost Engineering Course</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center mb-5 mb-lg-0 p-4">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Human Resources</a></h4>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Featured Services Section -->
    <!-- ======= Coaching Lists Section ======= -->
    <section class="about-lists" id='coaching'>
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3 style="text-transform: uppercase;">We have coaching services as well to become</span></h3>
            </div>
            <div class="row no-gutters">
                <hr>
                <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up">
                    <span>01</span>
                    <h4>MRICS</h4>
                </div>

                <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
                    <span>02</span>
                    <h4>MCIOB</h4>
                </div>

                <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
                    <span>03</span>
                    <h4>MCMI</h4>
                </div>

                <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
                    <span>04</span>
                    <h4>MICE</h4>
                </div>

            </div>

        </div>
    </section><!-- End About Lists Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about" style="background-color: #f6f9fe;">
        <div class="container" data-aos="fade-up">


            <div class="row no-gutters d-flex align-items-center">
                <div class="col-lg-4 video-box">
                    <img src="{{asset('frontend/assets/images/v1.jpg')}}" class="img-fluid" alt="">
                    <!-- <a href="#" class="venobox play-btn mb-8" data-vbtype="video" data-autoplay="true"></a> -->
                </div>

                <div class="col-lg-8 d-flex flex-column justify-content-center">

                    <!-- ======= SUCCESS STORIES ======= -->
                    <section id="feedbacks" class="feedbacks">
                        <div class="container" data-aos="zoom-in">
                            <h2>SUCCESS STORIES</h2>
                            <div class="feedbacks-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class=" card item-card-feedback card-block">
                                            <img src="{{asset('frontend/assets/images/f1.jpg')}}" class="feedback-img" alt="">
                                            <h5 class="card-title mt-3 mb-3 p-2">Kristophr Vega</h5>
                                            <p>Mr. Eid Ashry understands and communicates the high requirements of the certification test and helps you meet them in an inspiring and motivating fashion. He is understandable, uses a lot of interactive language during classes and he has a strong and articulate voice. He sets the right expectations. Thank you Mr. Eid and Horizon International for your support and guidance.</p>
                                        </div>

                                    </div>
                                    <div class="swiper-slide">
                                        <div class=" card item-card-feedback card-block">
                                            <img src="{{asset('frontend/assets/images/f2.jpg')}}">
                                            <h5 class="card-title mt-3 mb-3 p-2">Tamer Elashmawy, PMP,RMP</h5>
                                            <p>Eid is a superior leader who builds strong relationships at all levels internally and externally. Eid’s ability to communicate with his clients, executives, direct reports and others within his sphere of influence enables him to successfully control the time of the projects. He is dedicated to achieving project goals and exceeding client expectations. Eid’s positive attitude and tireless work ethic enables him to move mountains. Eid’s excellent impersonal skills and dedication coupled with project management skills make him an invaluable leader and Instructor. I would welcome the opportunity to work with Eid again in the future and take many courses with him.</p>
                                        </div>

                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class=" card item-card-feedback card-block">
                                            <img src="{{asset('frontend/assets/images/f3.jpg')}}" class="feedback-img" alt="">
                                            <h5 class="card-title mt-3 mb-3 p-2">Adel Emam, PMP</h5>
                                            <p>Mr. EID ASHRY is best one of the all instructor which I see on my life. Eid is a unique personality in today’s age. He has a good way to transfer the information to candidate by simple and easy way .If anyone takes course with him, he just needs little study to pass the exam. Eid makes integration for all contents of the course. I take PMP course with anther instructor but I did not understand will, then I take the course again with EID then I passed the PMP exam. So I advise any candidate who is planning to take any course in all project management to take it with Eid. Really, I want to thank Eid and Horizons International too much.</p>
                                        </div>

                                    </div>
                                    <!-- End feedback item -->
                                    <div class="swiper-slide">


                                        <div class=" card item-card-feedback card-block">
                                            <img src="{{asset('frontend/assets/images/f4.jpg')}}" class="feedback-img" alt="">
                                            <h5 class="card-title mt-3 mb-3 p-2">ISLAM ABDELBARY, PMP</h5>
                                            <p>I strongly recommend Eid as an experienced management consultant and instructor, I have taken PMP certification course with him and I really think that he’s doing an outstanding job. I have many positive things to say about Eid, The course was more than satisfied. The course was supported by Eid’s slides, notes, and practice exams. With his help, I was to pass the PMP exam from the first time.</p>

                                        </div>

                                    </div><!-- End feedback item -->

                                    <div class="swiper-slide">
                                        <div class=" card item-card-feedback card-block">
                                            <img src="{{asset('frontend/assets/images/f5.png')}}" class="feedback-img" alt="">
                                            <h5 class="card-title mt-3 mb-3 p-2">Salami Abel Olubiyi, PMP</h5>
                                            <p>I have taken PMP course with Eid. I have many positive things to say about Eid’s background experience and attitude, supporting ideas for the exam, The course was more than satisfied. The course was supported by Eid’s slides, notes, and practice exams. With Eid’s training I was to pass the PMP exam from the first time. Thanks Eid </p>
                                        </div>

                                    </div><!-- End feedback item -->

                                </div>
                                <div class="swiper-pagination1"></div>
                            </div>

                        </div>
                    </section><!-- End Testimonials Section -->

                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

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

</main>



@endsection