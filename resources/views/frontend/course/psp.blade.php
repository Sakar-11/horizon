@extends('frontend/body/main_master')
@section('frontend')
<main id="main" data-aos="fade-up">


    @include('frontend.course.course-head')


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <h3 class="section-title">PLANNING & SCHEDULING PROFESSIONAL PSP®</h3>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center justify-content-center">
                            <div class="swiper-slide w-50">
                                <img src="{{asset('frontend/assets/images/clock.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Course information</h3>
                        <ul>
                            <li><strong>Duration</strong>: 30 hours</li>
                            <li><strong>Lectures</strong>: 15</li>
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
                            <input type="hidden" name="course_slug" value="planning-scheduling-professional-psp">

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
                            A PSP is a skilled planning and scheduling professional with advanced experience in project planning, and developing, monitoring, updating, forecasting and analyzing integrated project schedules. The PSP leads the planning and scheduling process within the AACE International Total Cost Management (TCM) framework. A PSP is able to communicate effectively with all project stakeholders, both internal and external.
                        </p>
                        <p>PSP certification is independently accredited by the Council of Engineering & Scientific Specialty Boards (CESB).


                        </p>
                        <p>AACE Certification distinguishes cost and management professionals who have the knowledge and skills to impact the bottom line
                        </p>
                    </div>
                </div>


            </div>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>Course Objectives</h2>
                        <ul>
                            <li>This training course will provide participants with a thorough background in the concepts of planning and scheduling for engineering and construction projects.
                            </li>
                            <li>The course addresses how to identify, monitor and balance information crucial for the successful management of projects.
                            </li>
                            <li>IT will discuss the development of a baseline performance management plan (PMP) for the project that will allow the efficient compilation and the timely generation of quantitative performance comparisons.
                            </li>
                            <li>
                                IT will discuss the development of a baseline performance management plan (PMP) for the project that will allow the efficient compilation and the timely generation of quantitative performance comparisons.
                            </li>
                            <li>
                                The Practical sessions will provide hands on experience.
                            </li>
                            <li>
                                Workshops create and track sample project from planning phase till controlling phase (Updating).
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>What is the target audience?

                        </h2>
                        <ul>
                            <li>Project Managers, Program Managers.
                            </li>
                            <li>Planners and Engineers how are or will be involved in planning and managing projects where schedule.
                            </li>
                            <li>Cost and Performance of projects must meet rigid requirements in the areas of engineering productions.
                            </li>
                            <li>
                                Data Processing.
                            </li>
                            <li>
                                Research and Development.
                            </li>
                            <li>
                                Construction.
                            </li>
                            <li>
                                Corporate planning, finance and Marketing.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>Benefits of Attending
                        </h2>
                        <ul>
                            <li>Following up/guiding the participant until he/she passes for the PSP Certification Examination.</li>
                            <li>Training 35 credit hours.</li>
                            <li>Certified and Professional Instructors.</li>
                            <li>Material + Questions.</li>
                            <li>Revision for each section.</li>
                            <li>Quiz after each section</li>
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
                                                    <p><strong>Planning Development:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Input and data.</li>
                                                        <li>Contract Requirements.</li>
                                                        <li>Identifications of stakeholders.</li>
                                                        <li>Construct ability methods.</li>
                                                        <li>Considerations and constraints.</li>
                                                        <li>Identifications of resources.</li>
                                                        <li>Value engineering.</li>
                                                        <li>Stakeholder consideration.</li>
                                                        <li>Project variables.</li>
                                                    </ul>
                                                    <p><strong>Planning Product:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Planning outputs and deliverable.</li>
                                                        <li>Define scope of work.</li>
                                                        <li>Define project goals.</li>
                                                        <li>Define Project plans.</li>
                                                        <li>Phase definitions.</li>
                                                        <li>Establish work break down structure (WBS).</li>
                                                        <li>Establish organizational breakdown structure (OBS).</li>
                                                        <li>Cost break down structure (CBS).</li>
                                                        <li>Review by stakeholders.</li>
                                                        <li>Cost estimate development.</li>
                                                        <li>Baseline plan.</li>
                                                        <li>Periodic forecasts.</li>
                                                        <li>Risk and Recovery plan.</li>
                                                        <li>Sequence and phase relationship.</li>
                                                    </ul>
                                                    <p><strong>Chapter 2:</strong><br>
                                                        <strong>Schedule development:</strong>
                                                    </p>
                                                    <br>
                                                    <ul>
                                                        <li>Input and data (from planning).</li>
                                                        <li>Define schedule scope.</li>
                                                        <li>Break down structure.</li>
                                                        <li>Schedule specifications.</li>
                                                        <li>Feedback from stakeholders.</li>
                                                        <li>Cost estimate module.</li>
                                                        <li>Creating schedule.</li>
                                                        <li>Types of schedules.</li>
                                                        <li>Activities.</li>
                                                        <li>Durations.</li>
                                                        <li>Relationships.</li>
                                                        <li>Constraints and calendars.</li>
                                                        <li>Milestones.</li>
                                                        <li>Cost / resource loading.</li>
                                                        <li>Schedule basis documentation.</li>
                                                        <li>Schedule quality analysis and compliance review.</li>
                                                    </ul>
                                                    <p><strong>Schedule Maintenance / controlling:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Maintain schedule.</li>
                                                        <li>Baseline schedule.</li>
                                                        <li>Tracking schedule progress.</li>
                                                        <li>Cost and resources management.</li>
                                                        <li>Schedules change management.</li>
                                                        <li>Acceleration.</li>
                                                        <li>Schedule maintenance feedback.</li>
                                                        <li>Schedule output and deliverable.</li>
                                                        <li>Control level schedules.</li>
                                                        <li>Variances and trends.</li>
                                                        <li>Schedule analysis.</li>
                                                        <li>Schedule forecasts.</li>
                                                        <li>Recovery schedules.</li>
                                                        <li>Management summary.</li>
                                                        <li>Progress reports and reviews.</li>
                                                        <li>Construct ability review.</li>
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
                            <p>The PSP examination consists of four parts
                            </p>
                            <p><b> Part I</b> is Basic Knowledge and questions the basics of planning and scheduling. ***It consists of MCQ concerning the basics of planning and scheduling. (40 questions)
                            </p>
                            <p><b> Part II</b> is real-time Communications Exercise and requires the candidate to draft the equivalent of a one-page typewritten memorandum to simulate reporting on planning and scheduling
                                analysis to the project manager, explaining the issues and proposing a solution regarding a given problem.</p>
                            <p><b> Part III</b> is a Practical Exercise and entails answering a series of questions concerning various aspects of a single problem.
                            </p>
                            <p><b> Part IV</b> is a Planning and Scheduling Applications and questions planning and scheduling scenarios.
                            </p>
                            <p><b>Exam Duration: 5 HOURS –120 QUESTIONS
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