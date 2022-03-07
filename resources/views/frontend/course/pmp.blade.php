@extends('frontend/body/main_master')
@section('frontend')
<main id="main" data-aos="fade-up">

    @include('frontend.course.course-head')


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <h3 class="section-title">PROJECT MANAGEMENT PROFESSIONAL (PMP)
            </h3>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center justify-content-center">
                            <div class="swiper-slide w-50">
                                <img src="{{asset('frontend/assets/images/pmp.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Course information</h3>
                        <ul>
                            <li><strong>Duration</strong>: 35 Hrs.</li>
                            <li><strong>Lectures</strong>: 18 Lecture</li>
                            <li><strong>Video</strong>: 5 Hours</li>
                            <li><strong>Certificate of Completion</strong></li>
                        </ul>


                        @guest

                        <div class="alert alert-primary" role="alert">
                            <h4>Login to Get Course</h4><br>
                            <a class="btn btn-primary" href="{{url('login')}}">Login</a>
                        </div>
                        @else
                        @if ($approvalstatus == 'Request Approval')
                        <a onclick="event.preventDefault();
                                                                    document.getElementById('approval-form').submit();" class="btn btn-primary">{{$approvalstatus}}</a>

                        <form id="approval-form" action="{{ url('approval/add') }}" method="POST" class="d-none">
                            @csrf
                            <input type="hidden" name="course_slug" value="project-management-professional-pmp">

                        </form>

                        @elseif ($approvalstatus == 'Approved')
                        <div class="alert alert-success" role="alert">
                            Status: {{$approvalstatus}} <br>
                            Download Your Course: course.zip
                        </div>
                        @else
                        <div class="alert alert-success" role="alert">
                            Status: {{$approvalstatus}}
                        </div>
                        @endif

                        @endguest












                    </div>

                </div>
            </div>
            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>COURSE DESCRIPTION</h2>
                        <p>
                            The Project Management Professional (PMP)® is the most important industry-recognized certification for project managers. You can find PMPs leading projects in nearly every country and, unlike other certifications that focus on a particular geography or domain, the PMP® is truly global. As a PMP, you can work in virtually any industry, with any methodology and in any location.
                        </p>
                        <p>The PMP also increases your earning potential. PMP certification holders earn 17 percent more than their non-certified peers according to the Project Management Salary Survey—Eighth Edition.
                        </p>
                        <p>Employers benefit as well. When more than one-third of their project managers are PMP-certified, organizations complete more of their projects on time, on budget and meeting original goals. (Pulse of the Profession® study, PMI, 2015.)
                        </p>
                        <p>The PMP signifies that you speak and understand the global language of project management and connects you to a community of professionals, organizations and experts worldwide. Become a PMP and become a project hero.
                        </p>
                        <h6>Pre-Requests
                        </h6>
                        <ul>
                            <li>Secondary degree (high school diploma, associate’s degree or the global equivalent)</li>
                            <li>Four-year degree</li>
                            <li>7,500 hours leading and directing projects</li>
                            <li>4,500 hours leading and directing projects</li>
                            <li>35 hours of project management education</li>
                        </ul>
                    </div>
                </div>


            </div>

            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>CURRICULUM
                        </h2>
                        <section id="faq" class="faq section-bg">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div>
                                        <ul class="faq-list">
                                            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question mb-4">Section 1: Budget Management: <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                                <p>Your budget is the authorized funding for your project. For the PMP Certification Exam, you will need to know the definition of this process and be familiar with the definition of budget and budget at completion.
                                                </p>
                                            </div>
                                        </ul>
                                        <ul class="faq-list">
                                            <div class="collapsed question mb-4">Section 2: Logistic Management: </div>

                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>


            <div class="row gy-4">
                <div class="col-lg-8">
                    <hr>
                    <div class="portfolio-info">
                        <h3>ABOUT INSTRUCTORS
                        </h3>
                        <div>
                            <div style="display: flex;">
                                <div>
                                    <img src="{{asset('frontend/assets/images/instructor1.jpg')}}" style="width: 80px;border-radius: 40px;margin:10px" alt="">
                                </div>
                                <div style="align-self: end;">
                                    <h4>Mr. Eid Ashry</h4>
                                    <p>Management Consultant and Instructor</p>
                                </div>
                            </div>
                            <hr>
                            <p style="text-align:justify;">Mr. Eid Ashry, (PMP,PMI-RMP, PMI-SP,PMI-ACP,PSP,CCP,PPPM,MPM,LEED) has a BSC. Civil Engineering, – Faculty of Engineering, Cairo University, EGYPT. He has working experience for more than 15 years, he Started his career as a Planning and Cost Control Engineer, and then moved to Project Management. (Currently his main focus is on Training and Consultation services in management fields). Mr. Eid delivered many training courses and presentations in GCC, the courses delivered are in project management.
                                <li> Manage the planning department for some projects. </li>
                                <li> Coordinate with all subcontractors’ planners regarding projects schedule, planning requirements and schedule updates.</li>
                                <li> Identify the internal and high quality replica watchesexternal relationships and dependency between the various parties (Client, Contract 1 works, Subcontractors, Municipality services… etc.) to develop a detailed time schedule.</li>
                                <li> Incorporate all subcontractors and internal schedules into one detailed schedule cost and resource loaded and monitor the progress.</li>
                                <li> Attend the weekly progress meeting with the client to discuss the progress of the work and to raise the schedule area of concerns.</li>
                                <li> Chair the weekly planning meetings with the subcontractors.</li>
                                <li> Monitor the long lead material approval, purchase, manufacture and delivery.</li>
                                <li> Report the progress, planned v.s actual to the project manager and top management.</li>
                                <li> Prepare the client weekly, monthly reports as per SBG & ACC standards.</li>
                                <li> Highlight any potential or existing risks / issues and escalate them to project manager.</li>
                                <li> Perform cost control to selective activities.</li>
                                <li> Update and monitor the manpower histogram planned v.s actual.</li>
                                <li> Analyze the time claims from individual subcontractors, record all delay events and prepare an Extension of Time to the client due to late commence and work progress interruptions by others.</li>
                                <li> Further to the detailed schedule in primavera, prepare a spread excel sheets with additional details for the two weeks look ahead schedule and long lead activities fully automated to draw the bar chart based on planned and actual dates, calculating the planned value, planned manpower and planned quantities in daily.</li>
                                <li> Develop risk / issue register and log to highlight any potential or existing risks / issues.</li>
                            </p>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endsection