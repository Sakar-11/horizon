@extends('frontend/body/main_master')
@section('frontend')

<style>
    .footer-links {
        margin-bottom: 30px;
    }

    .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .social-links-a a {
        font-size: 18px;
        display: inline-block;
        background: #106eea;
        color: #fff;
        line-height: 1;
        padding: 8px 0;
        margin-right: 4px;
        border-radius: 4px;
        text-align: center;
        width: 36px;
        height: 36px;
        transition: 0.3s;
    }

    .footer-links ul i {
        padding-right: 2px;
        color: #106eea;
        font-size: 18px;
        line-height: 1;
    }

    .footer-links ul li {
        padding: 10px 0;
        display: flex;
        align-items: center;
    }

    .project-tab {
        margin-top: -8%;
    }

    .project-tab #tabs {
        background: #007b5e;
        color: #eee;
    }

    .project-tab #tabs h6.section-title {
        color: #eee;
    }

    .project-tab #tabs .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #ffffff !important;
        background-color: #0062cc !important;
        border-color: transparent transparent #f3f3f3;
        border-bottom: 3px solid !important;
        font-size: 16px;
        font-weight: bold;
    }

    .project-tab .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        color: #0062cc;
        font-size: 16px;
        font-weight: 600;
    }

    .project-tab .nav-link:hover {
        border: none;
    }

    .project-tab thead {
        background: #f3f3f3;
        color: #333;
    }

    .project-tab a {
        text-decoration: none;
        color: #333;
        font-weight: 600;
    }
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>About Us</h2>
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Instructor</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">

            <div class="section-title">
                <h3>About <span>Mr.Eid Ashry</span></h3>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('frontend/assets/images/instructor1full.jpg')}}" class="img-fluid" alt="" data-aos="fade-up" data-aos-delay="100">
                    <div class=" footer-links">
                        <div class="social-links-a mt-3">
                            <a target="_blank" href="https://twitter.com/QatarHorizon" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a target="_blank" href="https://www.facebook.com/Horizonipm/" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/company/horizon-international-training-&-project-management/" class="linkedin"><i class="bx bxl-linkedin"></i></i></a>

                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <div class="info-box mb-4">

                                <h6> <i class="bx bx-map"></i> Postal Address:</h6>
                                <p>PO Box 97845 Salwa Road, Doha, Qatar.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="info-box  mb-4">

                                    <h6> <i class="bx bx-phone-call"></i> Phone</h6>
                                    <p>00974 30153228</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="info-box  mb-4">

                                    <h6> <i class="bx bx-envelope"></i> Email Us</h6>
                                    <p>info@horizonipm.com</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="info-box  mb-4">

                                    <h6> <i class="bx bx-skype"></i> Skype:</h6>
                                    <p>horizonipm2016</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="info-box  mb-4">

                                    <h6> <i class="bx bx-web"></i> Web</h6>
                                    <p>www.horizonipm.com</p>
                                </div>
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Mr. Eid Ashry has a BSC. Civil Engineering, – Faculty of Engineering, Cairo University, EGYPT.

                    </p>
                    <p>He has working experience for more than 15 years, he Started his career as a Planning and Cost Control Engineer, and then moved to Project Management. (Currently his main focus is on Training and Consultation services in management fields). Mr. Eid delivered many training courses and presentations in GCC, the courses delivered are in project management.

                    </p>

                    <section id="tabs" class="project-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <nav>
                                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Certificates</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Experience </a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <ul>
                                                <li>Primavera P6 Enterprise Project Portfolio Management 8- Certified Implementation Specialists</li>
                                                <li>PSP Certificate (Planning and Scheduling Professional &nbsp;&nbsp;- No.: 1409</li>
                                                <li>PMI-ACP<sup>SM</sup>Certificate (Agile Certified Practitioner)&nbsp;&nbsp;- No.: 1699876, 2014.</li>
                                                <li>PMI-RMP Certificate (Risk Management Professional) &nbsp;&nbsp;-No.: 1534238, 2012.</li>
                                                <li>PMI-SP Certificate (Scheduling Professional) &nbsp;&nbsp;- No.: 1539714, 2012.</li>
                                                <li>PMP Certificate (Project Management Professional) &nbsp;&nbsp;- No.: 1387868, 2011</li>
                                                <li>Saudi Council of Engineers, Grade is Professional Engineer, 2011.</li>
                                                <li>LEED GA Certificate (Certified LEED Expert).</li>
                                                <li>Green Building Certification Institute (GBCI)&nbsp;= 10687991, 2010</li>
                                                <li>U.S. Green Building Council (USGBC) ,&nbsp;- 2010</li>
                                                <li>PMI Member&nbsp;&nbsp;- No.:1841256, 2009.</li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <ul>
                                                <li style="text-align: justify;">Manage the planning department for some projects.</li>
                                                <li style="text-align: justify;">Coordinate with all subcontractors’ planners regarding projects schedule, planning requirements and schedule updates.</li>
                                                <li style="text-align: justify;">Identify the internal and &nbsp; <a href="http://www.flagreplica.com/">high quality replica watches</a> external relationships and dependency between the various parties (Client, Contract 1 works, Subcontractors, Municipality services… etc.) to develop a detailed time schedule.</li>
                                                <li style="text-align: justify;">Incorporate all subcontractors and internal schedules into one detailed schedule cost and resource loaded and monitor the progress.</li>
                                                <li style="text-align: justify;">Attend the weekly progress meeting with the client to discuss the progress of the work and to raise the schedule area of concerns.</li>
                                                <li style="text-align: justify;">Chair the weekly planning meetings with the subcontractors.</li>
                                                <li style="text-align: justify;">Monitor the long lead material approval, purchase, manufacture and delivery.</li>
                                                <li style="text-align: justify;">Report the progress, planned v.s actual to the project manager and top management.</li>
                                                <li style="text-align: justify;">Prepare the client weekly, monthly reports as per SBG &amp; ACC standards.</li>
                                                <li style="text-align: justify;">Highlight any potential or existing risks / issues and escalate them to project manager.</li>
                                                <li style="text-align: justify;">Perform cost control to selective activities.</li>
                                                <li style="text-align: justify;">Update and monitor the manpower histogram planned v.s actual.</li>
                                                <li style="text-align: justify;">Analyze the time claims from individual subcontractors, record all delay events and prepare an Extension of Time to the client due to late commence and work progress interruptions by others.</li>
                                                <li style="text-align: justify;">Further to the detailed schedule in primavera, prepare a spread excel sheets with additional details for the two weeks look ahead schedule and long lead activities fully automated to draw the bar chart based on planned and actual dates, calculating the planned value,&nbsp; planned manpower and planned quantities in daily.</li>
                                                <li style="text-align: justify;">Develop risk / issue register and log to highlight&nbsp;any potential or existing risks / issues.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



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