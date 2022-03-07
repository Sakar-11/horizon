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
                        <h3>COBIE
                        </h3>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="100">
                        <h3>COBIE

                        </h3>
                        <p>“COBie” or “Construction Operations Building information exchange” is a standard, it’s a data format that helps capture and record important project data at the point of origin, including equipment lists, product data sheets, warranties, spare parts list, and preventive maintenance schedules. This information is essential to support operations, maintenance and asset management once the building is in service.

                        </p>
                        <p>More and more, projects are mandating a “COBie deliverable”. Horizons helps A/E firms, Contractors and Owners properly fulfill the COBie lifecycle information management requirements, including:

                        </p>
                        <p>Setting up and Structuring COBie database (Excel sheet or other).
                            Producing Data Drops at set stages of a project, through the design, construction and operation phases.
                            Setting up the models for COBie compliance.
                            Auditing existing BIM models for correctness of COBie and Data extraction.</p>
                    </div>

                </div>
            </section><!-- End About Section -->

        </div>
    </section><!-- End Featured Services Section -->

</main><!-- End #main -->


@endsection