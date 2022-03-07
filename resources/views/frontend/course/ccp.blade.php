@extends('frontend/body/main_master')
@section('frontend')
<main id="main" data-aos="fade-up">


    @include('frontend.course.course-head')


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <h3 class="section-title">CCP – Certified Cost Professional (AACE-USA)</h3>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center justify-content-center">
                            <div class="swiper-slide w-50">
                                <img src="{{asset('frontend/assets/images/ccp.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Course information</h3>
                        <ul>
                            <li><strong>Duration</strong>: 150 hours</li>
                            <li><strong>Lectures</strong>: 50</li>
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
                            <input type="hidden" name="course_slug" value="ccp-certified-cost-professional-aace-usa">

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
                            A CCP is an experienced practitioner with advanced knowledge and technical expertise to apply and communicate the broad principles and best practices of Total Cost management (TCM) in the planning, execution and management of any organizational project or program. The Certified Cost Professional (CCP) certification was established in 1976 and is independently accredited by the Council of Engineering & Scientific Specialty Boards (CESB) since 2000. AACE certification distinguishes cost and management professionals who have the knowledge and skills to impact the bottom line.

                        </p>
                        <p>CCP (Certified Cost Professional) is a certification granted by the Association for Advancement of Cost Engineering (AACE) to individuals who possess fundamental knowledge and expertise in cost and project controls.
                        </p>
                        <p>AACE International’s Certified Cost Professional certification course is an independently accredited certification by the Council of Engineering & Scientific Specialty Boards (CESB) and the International Cost Engineering Council (ICEC).
                        </p>
                        <p>CCP certification distinguishes cost and management professionals who have the knowledge and skills that impact the bottom line. AACE certification ensures a high quality standard.
                        </p>
                    </div>
                </div>


            </div>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>Course Objectives</h2>
                        <p>The focus of this CCP training is to prepare attendees for the CCP exam by reviewing subjects covered on the exam and working through various sample questions. In addition, participants will learn about the process of writing a technical paper, a prerequisite to sit the exam: selecting a topic, structuring a paper, and referencing sources. Individuals who want to obtain a general knowledge about project controls can also benefit from the CCP Training.

                        </p>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>What is the target audience?

                        </h2>
                        <p>This course is intended for professionals in all business enterprises including but not limited to Project Managers, Finance Managers, Human Resource Personals, Accountant, Engineers, Planners, Cost Engineers, Cost Controlling Engineers and Quantity Surveyors.

                        </p>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>Benefits of Attending
                        </h2>
                        <ul>
                            <li>40 Hours of exam focused Intensive Training</li>
                            <li>Full support from applying for AACE International membership to certification exam and re- certification
                            </li>
                            <li>CCP Certified Instructors with industry experience
                            </li>
                            <li>Complete guidance to write your technical paper
                            </li>
                            <li>Examination practice questions, exercises, flash cards etc.
                            </li>
                            <li>Free Re-training for non-pass student
                            </li>
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
                                    <div class="col-xl-10">
                                        <h3>Section 1</h3>
                                        <ul class="faq-list">

                                            <li class="p-2  ">
                                                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question mb-4">Course Content the following Modules is included in this course: <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                                    <ul>
                                                        <li>&nbsp;Cost</li>
                                                        <li>&nbsp;Cost Estimating</li>
                                                        <li>&nbsp;Planning &amp; Scheduling</li>
                                                        <li>&nbsp;Progress &amp; Cost Control</li>
                                                        <li>&nbsp;Project Management</li>
                                                        <li>&nbsp;Economic Analysis</li>
                                                        <li>&nbsp;Statistics, Probability, &amp; Risk</li>
                                                    </ul>
                                                </div>
                                            </li>

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
                    <div class="portfolio-description">
                        <h2>Exam and Certification Criteria

                        </h2>
                        <ul>
                            <li>8 years industry related experience.</li>
                            <hr>OR
                            <hr>
                            <li>4 years industry related experience + 4‐year industry related college degree</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>Exam Details
                        </h2>
                        <h5>Exam Structure:</h5>
                        <ul>
                            <p>The Computer Based Test is a (120 – Multiple Choice Questions) 5 hour continuous four part closed book exam. However, formula guides were developed to assist in calculating specific questions and available onscreen, when, and if, needed. Candidates are also permitted to bring any style of calculator, including programmable calculators, to use during the exam.


                            </p>
                            <p><b> Part I</b> Supporting Skills & Knowledge
                            </p>
                            <p><b> Part II</b> Economic Analysis.</p>
                            <p><b> Part III</b> Cost Estimating and Control
                            </p>
                            <p>CBT exams are conducted by http://www.kryteriononline.com/ around the year. Check your testing center location and working hours at this website.
                            </p>
                            <p><b>To schedule you’re CBT, logon to this website http://www.webassessor.com/aace
                                </b></p>
                        </ul>
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