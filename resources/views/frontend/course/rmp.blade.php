@extends('frontend/body/main_master')
@section('frontend')
<main id="main" data-aos="fade-up">


    @include('frontend.course.course-head')


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <h3 class="section-title">RISK MANAGEMENT PROFESSIONAL PMI-RMP®</h3>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center justify-content-center">
                            <div class="swiper-slide w-50">
                                <img src="{{asset('frontend/assets/images/rmp.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Course information</h3>
                        <ul>
                            <li><strong>Duration</strong>: 30 hours</li>
                            <li><strong>Lectures</strong>: 14</li>
                            <li><strong>Video</strong>: None</li>
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
                            <input type="hidden" name="course_slug" value="risk-management-professional-pmi-rmp">

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
                        <p>The PMI’s RMP® is targeted at project manager professionals who are involved in recognizing individuals who provide expertise in the specialized area of assessing and identifying project risks along with preparing plans to mitigate threats and capitalize on opportunities. The exam covers the various areas in risk management.

                        </p>
                    </div>
                </div>


            </div>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>Course Objectives</h2>
                        <ul>
                            <li>The PMI’s RMP® is targeted at project manager professionals who are involved in recognizing individuals who provide expertise in the specialized area of assessing and identifying project risks along with preparing plans to mitigate threats and capitalize on opportunities. The exam covers the various areas in risk management.
                            </li>
                            <li>How to apply these concepts in real life for effective results
                            </li>
                            <li>Overview of process groups and knowledge areas of project management
                            </li>
                            <li>
                                Risk management processes and how to apply them
                            </li>
                            <li>
                                Various internal and external factors, and their influence on the success or failure of a project
                            </li>
                            <li>
                                Systematic approach to identify risks, perform their qualitative and quantitative analysis, perform risk response planning and execution and continuously monitor and control risks
                            </li>
                            <li>
                                How to overcome with the difficulties that project managers face due to complex nature of project.
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
                        <p>This PMI-RMP certification training course is intended for candidates who are preparing for their PMP / CAPM certification exams as well as other project professionals who need a deeper understanding of project risk management concepts. This would include project managers at all levels from associate to senior, project sponsors, project team members, risk managers, product managers, program managers, and analysts.

                        </p>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>Benefits of Attending
                        </h2>
                        <p>The PMI-RMP credential behind your name gives way to many benefits. In addition to obvious benefits such as having the edge in your job search over those without the PMI-RMP credential, it also may allow you to negotiate a higher salary and get your resume noticed earlier. Many employers seeking a risk management employee prefer a highly specialized professional, especially those with a credential. As a PMI member, you have access to PMI publications, training opportunities, networking and other perks to help escalate your risk management career.

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
                                    <div class="col-xl-10">
                                        <h3>Section 1</h3>
                                        <ul class="faq-list">

                                            <li class="p-2  ">
                                                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question mb-4">Course Content the following Modules is included in this course: <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                                    <ul>
                                                        <li>Risk Management Introduction</li>
                                                        <li>Definition of Project Risk Management</li>
                                                        <li>Risk Analysis: Risk Identification</li>
                                                        <li>Risk Analysis: Qualitative Risk Analysis</li>
                                                        <li>Risk Analysis: Quantities Risk Analysis</li>
                                                        <li>Risk Response Planning</li>
                                                        <li>Risk Communication</li>
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
                            <li>A four-year degree (bachelor’s or the global equivalent), with at least 3,000 hours of project risk management experience and 30 hours of project risk management education.
                            </li>
                            <hr>OR
                            <hr>
                            <li>A secondary diploma (high school or the global equivalent) with at least 4,500 hours of project risk management experience and 40 hours of project risk management education.
                            </li>
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
                        <p>To earn your Risk Management Professional (PMI-RMP) ® credential, you need to meet experience and education requirements, and pass the PMI – RMP® examination, the exam contains 150 questions, multiple-choice test.

                        </p>
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