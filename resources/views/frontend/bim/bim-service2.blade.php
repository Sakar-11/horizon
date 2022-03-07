@extends('frontend/body/main_master')
@section('frontend')
<main id="main">
    @include('frontend/bim.bim-head')
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3>BIM COORDINATION AND FABRICATION</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 p-4">
                    <a href="{{url('bim-services/bim-coordination-fabrication/bim-coordination')}}">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title">BIM COORDINATION</h4>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 p-4">
                    <a href="{{url('bim-services/bim-coordination-fabrication/building-conflict-reporting-clash-detection')}}">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title">BUILDING CONFLICT REPORTING / CLASH DETECTION</h4>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 p-4">
                    <a href="{{url('bim-services/bim-coordination-fabrication/procurement-quantity-take-offs-qto')}}">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title">PROCUREMENT AND QUANTITY TAKE-OFFS (QTO)</h4>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 p-4">
                    <a href="{{url('bim-services/bim-coordination-fabrication/4d-scheduling-construction-sequencing')}}">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title">4D SCHEDULING / CONSTRUCTION SEQUENCING</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 p-4">
                    <a href="{{url('bim-services/bim-coordination-fabrication/5d-cost-estimation')}}">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title">5D COST ESTIMATION</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 p-4">
                    <a href="{{url('bim-services/bim-coordination-fabrication/bim-prefabrication-fabrication')}}">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title">BIM FOR PREFABRICATION AND FABRICATION</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 p-4">
                    <a href="{{url('bim-services/bim-coordination-fabrication/bim-coordination-fabrication')}}">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title">ON-SITE BIM SUPPORT</h4>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section><!-- End Featured Services Section -->

</main><!-- End #main -->


@endsection