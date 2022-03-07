@extends('frontend/body/main_master')
@section('frontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>About Us</h2>
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>About</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">

            <div class="section-title">
                <h2>About</h2>
                <h3>Welcome to <span>Horizon International!</span></h3>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('frontend/assets/img/about.jpg')}}" class="img-fluid" alt="" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Horizons International is proud to introduce itself as professional project management & construction management services firm offering project management consulting for the Construction Industry, management training courses, resources and tools to corporate and business clients to improve their performance on projects. Our main focus is to provide professional project management services and training to the clients/owners including corporations & Govt. agencies in the engineering and construction sector, Architecture, environmental and many other industries.
                    </p>
                    <h3>Our Services</h3>
                    <ul>
                        <li>
                            <p>Technical & Management Training</p>
                        </li>
                        <li>
                            <p>Project management services.</p>
                        </li>
                        <li>
                            <p>Safety consulting and auditing.</p>
                        </li>
                        <li>
                            <p>Structural design consulting.</p>
                        </li>

                    </ul>
                    <!-- <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore
                        magna aliqua.
                    </p> -->
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href=""> Our Mission
                            </a></h4>
                        <p>Identifying, understanding, promoting and providing the right mix of knowledge and skills to professionals and corporate houses through quality training and superior customer service and help them achieve competitive advantage.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Our Vission
                            </a></h4>
                        <p>To become the most customer preferred training provider in the world helping our clients minimizes the risks inherent in the projects</p>
                    </div>
                </div>


            </div>

        </div>
    </section><!-- End Services Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">
                    <h3>Why Horizons International?</h3>
                    <p>Horizons International strives to inculcate individual specific, quality training and specialized consulting. We offer customized courses to suit the specific needs of our clients. This helps them to meet their requirements. We further provide the appropriate training. Our biggest advantage and strength is the skill sets of our Consulting Professionals, who are from a wide range of corporate, industrial and academic backgrounds and who have all the global credential certificates all over the world. This enhances the ability of our consultants to understand and provide solutions catering to a wide range of professionals. We endeavor to support our faculties and consultants with dedication in providing top level consulting and training services.</p>
                </div>
                <br>
                <br>
                <hr>
                <div class="col-lg-12 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <h3>Key Strengths!</h3>
                    <ul>
                        <li>
                            <p>Developing, and maintaining relationships with a core set of clients who value our distinctive competence;</p>
                        </li>
                        <li>
                            <p>Providing our clients with the most cutting-edge programs that reflect the depth and expertise of our faculty;
                            </p>
                        </li>
                        <li>
                            <p>Utilizing technology to deliver education effectively and efficiently on a global basis. We partner with you to deliver corporate development programs in learning formats that best suit your organization’s structure and needs because of the following:</p>
                        </li>
                    </ul>
                    <ul>

                        <p>1) Highly qualified Consultants</p>


                        <p>2) Real world & internationally experienced /industry experts as trainers/Consultants </p>


                        <p>3) Consultants with professional accreditation from the respective field
                        </p>


                        <p>4) Well equipped Training Rooms /public seminar facilities for conducting courses</p>


                        <p>5) Offers internationally recognized Certification Courses by the prestigious organizations such as PMI®, AACEI®, IMA®, USGBC</p>


                        <p>6) Encouraging our clients to learn &enhance their skills and applying them in their business practices to achieve better business result.</p>


                        <p>7) Helping the professionals to achieve specialized skills, which in turn enhances their self-confidence and guiding them to a higher career path?</p>

                    </ul>
                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Training Division
                            </a></h4>
                        <p>Our training division offers both public and customized in-house management training workshops and courses. Our courses are based on the recognized International Bodies and methodologies and offer a recognized approach to project management training. Horizons International as experts in providing International standard Management Training to suit the needs of all professionals in various domains to achieve their career goals through the internationally recognized certifications. Horizons International provides internationally recognized courses that are clearly intended to enhance and sharpen the skills and Knowledge by acquiring appropriate tools and techniques, which increases the confidence and clarity in thinking and performance at sustained levels.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Project Management & Consulting
                            </a></h4>
                        <p>Our Project Management consulting services will provide you with professional project management experience and expertise to ensure that your project goals are achieved. We further provide resources and tools for project managers to improve their performance. What sets our company apart is our team of consultants and faculties are professional experts in the field of project management. They each have from (15-25) years of experience in their field of managing projects internationally and offer extensive hands on industry expertise in their subject area</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->


@endsection