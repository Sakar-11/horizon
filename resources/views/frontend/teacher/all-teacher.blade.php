@extends('frontend/body/main_master')
@section('frontend')

<style>
    .item {
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 10px;
    }

    .item-card {
        transition: 0.5s;
        cursor: pointer;
    }

    .item-card-title {
        font-size: 15px;
        transition: 1s;
        text-align: center;
        cursor: pointer;
    }

    .item-card-title i {
        font-size: 15px;
        transition: 1s;
        cursor: pointer;
        color: #ffa710
    }

    .card-title i:hover {
        transform: scale(1.25) rotate(100deg);
        color: #18d4ca;

    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
        z-index: 10000;
    }

    .card-text {
        height: 80px;
    }

    .card::before,
    .card::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        transform: scale3d(0, 0, 1);
        transition: transform .3s ease-out 0s;
        background: rgba(255, 255, 255, 0.1);
        content: '';
        pointer-events: none;
    }

    .card::before {
        transform-origin: left top;
    }

    .card::after {
        transform-origin: right bottom;
    }

    h5,
    p,
    h6 {
        color: #333;
    }

    .card:hover::before,
    .card:hover::after,
    .card:focus::before,
    .card:focus::after {
        transform: scale3d(1, 1, 1);
    }
</style>




<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Instructors</h2>
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>All Instructors</li>
                </ol>

            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <div class="container mt-2">


        <div class="row p-4 mb-4">
            <div class="col-md-3 col-sm-6 item" data-aos="fade-up" data-aos-delay="100">
                <a href="{{url('teacher/eid-ashry')}}">


                    <div class="card item-card card-block p-4">
                        <img src="{{asset('frontend/assets/images/instructor1full.jpg')}}" alt="instructor1">
                        <h5 class="card-title mt-3 mb-3 p-2">Mr. Eid Ashry</h5>
                        <h6>Management Consultant and Instructor</h6>
                        <br>
                        <p style="text-align:justify;">Mr. Eid Ashry, (PMP,PMI-RMP, PMI-SP, PMI-ACP, PSP, CCP, PPPM, MPM, LEED) has a BSC. Civil Engineering, – Faculty of Engineering, Cairo University, EGYPT.<br>
                            He has working experience for more than 15 years, he Started his career as a Planning and Cost Control Engineer, and then moved to Project Management. (Currently his main focus is on Training and Consultation services in management fields). Mr. Eid delivered many training courses and presentations in GCC, the courses delivered are in project management.</p>
                    </div>
                </a>
            </div>
        </div>

    </div>
</main>



@endsection