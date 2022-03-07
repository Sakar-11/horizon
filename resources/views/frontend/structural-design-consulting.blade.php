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
                    <li>structural-design-consulting</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">

            <div class="section-title">
                <h3>Structural <span>design consulting</span></h3>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('assets/images/sdc.jpg')}}" class="img-fluid" alt="" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Structural engineering is one of our significant areas of involvement and remains as our core strengths.”

                    </p>
                    <p>With sound knowledge and latest technologies in the construction industry, we hold an ability to innovate and create safe economical solution that fulfills our client vision and architectural intention.

                    </p>
                    <p>Structural engineering covers a wide range of services and our experienced professional engineers have complete skills to provide professional input for challenging project as well as normal projects. Our projects covers single storey houses to multi-storey residential towers, commercial, health and educational buildings.

                    </p>
                    <p>Having experience gained over the period with an advancement of computer aided design techniques helps us to be a highly reputable and dependable structural engineering consultant.

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