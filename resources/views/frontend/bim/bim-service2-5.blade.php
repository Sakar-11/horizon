@extends('frontend/body/main_master')
@section('frontend')
<main id="main">


    @include('frontend/bim.bim-head')
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <!-- ======= About Section ======= -->
            <section id="about" class="about section-bg">
                <div class="container">

                    <div class="section-title">
                        <h3>5D COST ESTIMATION
                        </h3>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="100">
                        <h3>BIM DISCIPLINES

                        </h3>
                        <p>Conventional estimating techniques that rely on two-dimensional drawing measurements have substantial potential for ambiguity, inefficiency, and error. A three-dimensional project model removes the ambiguity and potential inconsistencies in project quantity estimations.

                        </p>
                        <p>The fifth dimension (5D) is cost, which is brought into the virtual building life cycle.


                        </p>
                        <p>A 5D estimate is a BIM linked to construction cost estimation through material quantities that are automatically generated from the data within the model. 5D Estimation improves budgeting, provides cost-loaded schedules, and displays multiple interactive forecasts to make agile comparisons. When the design is changed, cost adjustments are calculated in real time. This enables general contractors to help the owner improve design with value-engineering decisions.

                        </p>
                    </div>

                </div>
            </section><!-- End About Section -->

        </div>
    </section><!-- End Featured Services Section -->

</main><!-- End #main -->


@endsection