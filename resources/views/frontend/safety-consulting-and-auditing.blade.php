@extends('frontend/body/main_master')
@section('frontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2></h2>
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>safety-consulting-and-auditing</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">

            <div class="section-title">
                <h3>SAFETY <span>CONSULTING AND AUDITING</span></h3>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('assets/images/scat.png')}}" class="img-fluid" alt="" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        All workers have a right to work in places where risks to their health and safety are minimized and controlled. Employers have a duty to protect the health and safety of people affected by their operations; also they should ensure that all staff has a level of health and safety information, instruction, training and supervision.
                    </p>
                    <p>Health and safety management is vitally important; failure to have robust policies and risk controls in place can lead to accidents incurring significant costs. These costs include company fines, downtime, reputation damage, absenteeism and also personal liability for company directors.
                    </p>
                    <p>Work with Horizons International and join a list of leading companies who consider us their partner of choice for health and safety risk management services.
                    </p>
                    <p>Horizons International offers the broadest range of health and safety risk management services to assist businesses comply with every aspect of health and safety legislation including:
                    </p>
                    <!-- <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore
                        magna aliqua.
                    </p> -->
                </div>
            </div>

        </div>
    </section><!-- End About Section -->




</main><!-- End #main -->


@endsection