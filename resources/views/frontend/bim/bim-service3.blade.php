@extends('frontend/body/main_master')
@section('frontend')
<main id="main">
    @include('frontend/bim.bim-head')
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3>BIM FOR FM</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 p-4">
                    <a href="{{url('bim-services/bim-for-fm/6d-bim-facility-management')}}">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title">6D - BIM FOR FACILITY MANAGEMENT</h4>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 p-4">
                    <a href="{{url('bim-services/bim-for-fm/cobie')}}">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title">COBIE</h4>
                        </div>
                    </a>
                </div>


            </div>

        </div>
    </section><!-- End Featured Services Section -->

</main><!-- End #main -->


@endsection