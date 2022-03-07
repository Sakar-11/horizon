@extends('frontend/body/main_master')
@section('frontend')
<main id="main" data-aos="fade-up">


    @include('frontend.course.course-head')


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <h3 class="section-title">Agile Certified Practitioner PMI-ACP® PMI</h3>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center justify-content-center">
                            <div class="swiper-slide w-50">
                                <img src="{{asset('frontend/assets/images/acp2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Course information</h3>
                        <ul>
                            <li><strong>Duration</strong>: 21 hours</li>
                            <li><strong>Lectures</strong>: 7</li>
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
                            <input type="hidden" name="course_slug" value="agile-certified-practitioner-pmi-acp-pmi">

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
                            Agile is a topic of growing importance in project management. The marketplace reflects this importance as project management practitioners increasingly embrace agile as a technique for managing successful projects. The PMI-ACP®certification recognizes an individual’s expertise in using agile practices in their projects, while demonstrating their increased professional versatility through agile tools and techniques. In addition, the PMI-ACP® certification carries a higher level of professional credibility as it requires a combination of agile training, experience working on agile projects, and examination on agile principles, practices, tools and techniques. This global certification also supports individuals in meeting the needs of organizations that rely on project practitioners to apply a diversity of methods to their project management.


                        </p>
                    </div>
                </div>


            </div>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>Course Objectives</h2>
                        <p>Describe the Agile Manifesto & Values, Explain the Agile principles, Overview of Agile methodologies like Scrum, XP, Kanban, DSDM, Crystal, Define similarities and differences between traditional approach of project management vs Agile, Apply the Agile Tools and techniques, Comprehend principles as per PMI-ACP® exam content outline, Satisfy the prerequisite of 21 contact hours of Agile Education for PMI-ACP® examination.

                        </p>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>What is the target audience?

                        </h2>
                        <ul>
                            <li>Civil Engineers
                            </li>
                            <li>Schedulers/Planners/Estimators
                            </li>
                            <li>Architects Engineers of all disciplines / Drafters / Designers
                            </li>
                            <li>
                                Team Leaders / Members
                            </li>
                            <li>
                                Project / Program Managers

                            </li>
                            <li>
                                Contractors
                            </li>
                            <li>
                                Foremen & Supervisors
                            </li>
                            <li>
                                Other individuals whose responsibilities include supporting projects
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
                            <li>Create a schedule from your own project
                            </li>
                            <li>Undertand critical path method (CPM) fundamentals and processes
                            </li>
                            <li>Define work breakdown structure (WBS)
                            </li>
                            <li>Add, organize & code activities
                            </li>
                            <li>Perform resource loading and levelling
                            </li>
                            <li>Set the project baseline
                            </li>
                            <li>Update the project schedule
                            </li>
                            <li>Incorporate project changes
                            </li>
                            <li>Customize layouts and reports
                            </li>
                            <li>Test their newly acquired skills in a safe, instructor – led environment
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
                                                    <p><strong>An Introduction to Agile Project Management</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>What is Agile?</li>
                                                        <li>Why is Agile Effective?</li>
                                                        <li>The Agile Manifesto</li>
                                                        <li>About Agile Principles and how they relate to project management</li>
                                                        <li>The Benefits of Agile</li>
                                                        <li>Class Exercise</li>
                                                    </ul>
                                                    <p><strong>Forming the Agile Team</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Agile Team Roles and Responsibilities</li>
                                                        <li>
                                                            Team Expectations</li>
                                                        <li>
                                                            Self Organization</li>
                                                        <li>
                                                            Team Communication</li>
                                                    </ul>
                                                    <p><strong>The Agile Coach</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Agile Team Roles and Responsibilities</li>
                                                        <li>
                                                            Role of the Agile Coach / Agile PM</li>
                                                        <li>

                                                            All About Agile Project Management</li>
                                                        <li> Effectively Working with Agile Teams</li>
                                                        <li>
                                                            Communication</li>
                                                        <li>The PMI Code of Ethics</li>
                                                    </ul>
                                                    <p><strong>Agile Planning</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Agile Project Planning</li>
                                                        <li>The 5 Levels of Agile Planning</li>
                                                        <li>Product Vision</li>
                                                        <li>The Product Roadmap</li>
                                                        <li>Class Exercisen</li>
                                                    </ul>
                                                    <p><strong>How to Focus on the Customer</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Involving the Customer</li>
                                                        <li>User Roles</li>
                                                        <li>How to Create and Use Personas</li>
                                                        <li>Class Exercisen</li>
                                                    </ul>
                                                    <p><strong>Creating and Maintaining the Product Backlog</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>All About the Product Backlog</li>
                                                        <li>All About User Stories</li>
                                                        <li>The INVEST Model</li>
                                                        <li>Agile Acceptance Criteria</li>
                                                        <li>Foundational Stories</li>
                                                        <li>Agile Constraints</li>
                                                        <li>Class Exercisen</li>
                                                    </ul>
                                                    <p><strong>Prioritizing the Product Backlog</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Agile Prioritization Themes</li>
                                                        <li>All About the Decision Matrix</li>
                                                        <li> About Kano Analysis</li>
                                                        <li>How to Prevent Fire Alarms</li>
                                                        <li>Continuous Prioritization in Agile</li>
                                                        <li>Class Exercisen</li>
                                                    </ul>
                                                    <p><strong>Agile Estimating</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Relative vs. Actual Estimating in Agile</li>
                                                        <li>An Introduction to Story Points</li>
                                                        <li>Using Story Points in your Project</li>
                                                        <li>Planning Poker</li>
                                                        <li>Class Exercisen</li>
                                                    </ul>
                                                    <p><strong>Agile Release Planning</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Velocity</li>
                                                        <li>All About Releases</li>
                                                        <li> Schedule Based vs. Feature Based Planning</li>
                                                        <li> How to Build the Release Plan</li>
                                                        <li> Communication</li>
                                                        <li> Class Exercise</li>
                                                    </ul>
                                                    <p><strong>All About User Stories</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li> How to get to the details</li>
                                                        <li> Documentation methods for collecting details</li>
                                                        <li> Establishing &nbsp;a consistent approach to grooming and product backlog review</li>

                                                    </ul>
                                                    <p><strong>Iteration Planning and Execution</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>All about Capacity</li>
                                                        <li>How to Engage the Team</li>
                                                        <li>Planning the Iteration</li>
                                                        <li>Executing the Iteration</li>
                                                        <li>Daily Scrum and Stand-up</li>
                                                        <li>The Scrum of Scrums</li>
                                                        <li>Iteration Review</li>
                                                        <li>How to Demonstrate Working Software</li>
                                                        <li>Class Exercise</li>
                                                    </ul>
                                                    <p><strong>Measuring and Communicating Progress</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Scrum of Scrums</li>
                                                        <li>All about Taskboards</li>
                                                        <li>Story and Task cards</li>
                                                        <li>Agile Metrics</li>
                                                        <li>The Burndown and Burnup Charts</li>
                                                        <li>Cumulative Features Diagrams</li>
                                                        <li>Agile Earned Value Management (EVM)</li>
                                                        <li>Agile Tools</li>
                                                    </ul>
                                                    <p><strong>Retrospectives</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>The Elements of a Retrospective</li>
                                                        <li>How to Facilitate Retrospectives</li>
                                                        <li>Tips for effective Retrospectives</li>
                                                        <li>A Review of Empirical Process Control</li>
                                                    </ul>
                                                    <p><strong>Advanced Agile Concepts</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>User stories with affinity sizing</li>
                                                        <li>Mapping User Stories</li>
                                                        <li>Tailoring Processes</li>
                                                        <li>Introduction to Kanban</li>
                                                        <li>Mapping the Value Stream</li>
                                                        <li>All about Monte Carlo simulations</li>
                                                    </ul>
                                                    <p><strong>Adopting Agile Project Management</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Overview of the Agile Process</li>
                                                        <li>How to Overcome Resistance and Get Started</li>
                                                        <li>Agile Calendar of Events</li>
                                                        <li>Challenges to Agile Adoption</li>
                                                        <li>Class Exercise</li>
                                                    </ul>
                                                    <p><strong>Preparing for the PMI-ACP Certification Exam</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Completing your PMI-ACP application</li>
                                                        <li>How to schedule your exam</li>
                                                        <li>PMI-ACP exam day expectations</li>
                                                        <li>Review each section of the exam</li>
                                                        <li>Review of PMI-ACP practice questions </li>
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
                        <h2>Exam Details
                        </h2>
                        <h5>Exam Structure:</h5>
                        <ul>
                            <li>High School Diploma, Associate’s Degree or Global Equivalent</li>
                            <li>2000 Hours (12 Months) Working on Project Teams in General Project Experience.</li>
                            <li>1500 Hours (8 Months) working on Project teams using agile methodologies in addition to the General Project Experience.</li>
                            <li>21 Hours of Training in Agile Practices.</li>
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