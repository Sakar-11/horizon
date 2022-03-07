@extends('frontend/body/main_master')
@section('frontend')
<main id="main">
    @include('frontend/bim.bim-head')
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3>BIM SERVICES</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 p-4">
                    <a href="{{url('bim-services/third-party-bim-model-auditing')}}">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title">THIRD-PARTY BIM MODEL AUDITING</h4>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 p-4">
                    <a href="{{url('bim-services/bim-coordination-fabrication')}}">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title">BIM COORDINATION AND FABRICATION</h4>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 p-4">
                    <a href="{{url('bim-services/bim-for-fm')}}">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title">BIM FOR FM</h4>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 p-4">
                    <a href="{{url('bim-services/3d-laser-scanning-scan-bim')}}">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title">3D LASER SCANNING & SCAN TO BIM</h4>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section><!-- End Featured Services Section -->

</main><!-- End #main -->


@endsection