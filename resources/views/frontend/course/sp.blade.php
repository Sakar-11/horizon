@extends('frontend/body/main_master')
@section('frontend')
<main id="main" data-aos="fade-up">

    @include('frontend.course.course-head')


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <h3 class="section-title">SCHEDULING PROFESSIONAL EXAM PREPARATION – PMI-SP

            </h3>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center justify-content-center">
                            <div class="swiper-slide w-50">
                                <img src="{{asset('frontend/assets/images/5-set-schedule-270x283.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Course information</h3>
                        <ul>
                            <li><strong>Duration</strong>: 24 Hrs.</li>
                            <li><strong>Lectures</strong>: 12 Lecture</li>
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
                            <input type="hidden" name="course_slug" value="scheduling-professional-exam-preparation-pmi-sp">

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
                            Prepare for the PMI Scheduling Professional (PMI-SP) certification exam. Look at project scheduling through a PMI perspective; it is delivered in a combination of lecture and hands-on learning format. In this boot camp style course, you will receive a comprehensive introduction to project scheduling and cover the five primary exam objectives. This prep course will utilize the 5th Edition of the PMBOK Guide Body of Knowledge.
                        </p>
                    </div>
                </div>


            </div>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>Course Objectives</h2>
                        <ul>
                            <li>Schedule Mission Management</li>
                            <li>Schedule Creation</li>
                            <li>Schedule Maintenance</li>
                            <li>Time and cost estimating techniques</li>
                            <li>Schedule Analysis</li>
                            <li>Schedule Communication and Reporting</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>What is the target audience?

                        </h2>
                        <p>This course will benefit anyone interested in learning the fundamentals of concepts of schedule development and management through PMI standards and guidelines, and will focus on exam preparation for the PMI-SP
                            certification exam.
                        </p>
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
                                            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question mb-4">Course Content the following Modules is included in this course: <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                                <p><strong>Introduction:</strong></p>
                                                <br>
                                                <ul>
                                                    <li>Course Introduction</li>
                                                    <li>PMI-SP Credential Overview</li>
                                                </ul>
                                                <p><strong>Project and Scheduling Foundation:</strong></p>
                                                <br>
                                                <ul>
                                                    <li>Project Management Process  Project Environment</li>
                                                    <li>Project Management Knowledge Areas</li>
                                                    <li>Project Management Planning</li>
                                                    <li>Terms to Know</li>
                                                </ul>
                                                <p><strong>Defining the Activities:</strong></p>
                                                <br>
                                                <ul>
                                                    <li>Define Activities</li>
                                                    <li>Component Definitions</li>
                                                    <li>Terms to Know</li>
                                                </ul>
                                                <p><strong>Sequencing the Activities Resources:</strong></p>
                                                <br>
                                                <ul>
                                                    <li>Estimate Activity Resource</li>
                                                    <li>Develop Human Resource Plan</li>
                                                    <li>Acquire Project Team</li>
                                                    <li>Component Definitions</li>
                                                    <li>Terms to Know</li>
                                                </ul>
                                                <p><strong>Estimating the Activity Durations:</strong></p>
                                                <br>
                                                <ul>
                                                    <li>Estimate Activity Duration</li>
                                                    <li>Component Definitions</li>
                                                    <li>Terms to Know</li>
                                                </ul>
                                                <p><strong>Developing the Schedule:</strong></p>
                                                <br>
                                                <ul>
                                                    <li>Steps to developing the Schedule Baselline</li>
                                                    <li>Component Definitions</li>
                                                    <li>Terms to Know</li>
                                                </ul>
                                                <p><strong>Controlling the Schedule:</strong></p>
                                                <br>
                                                <ul>
                                                    <li>Selecting the right scheduling method</li>
                                                    <li>Understanding the scheduling model</li>
                                                    <li>Understanding the various scheduling tools</li>
                                                    <li>Developing the list of schedule activities</li>
                                                    <li>Generating the schedule network diagrams</li>
                                                    <li>Estimating resources and durations</li>
                                                    <li>Understanding critical chain method</li>
                                                    <li>Developing and controlling the schedule</li>
                                                    <li>Understanding scheduling risks</li>
                                                    <li>Communicating the schedule</li>
                                                    <li>Comprehensive question review of all modules</li>
                                                </ul>
                                            </div>
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