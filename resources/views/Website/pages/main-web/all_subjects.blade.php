@extends('Website.partials.layout')
@section('content')
    <div class="page page-data mb-5">

        <header class="header-page">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-3 mb-0">
                        <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                        <li class="breadcrumb-item" aria-current="page"> <a href="#"> من نحن </a> </li>
                        <li class="breadcrumb-item active" aria-current="page"> المواد الدراسية </li>
                    </ol>
                </nav>
                <div class="heading-page shadow-box  bg-white rounded-lg mb-4 p-4"
                    style='background-image: url({{ asset('website/assets/img/img16.png') }});background-position: top center;background-size: 100%;'>
                    <h1 class="h1 text-white text-center fw-bold  mb-0 pt-md-5 pt-3 mt-md-3"> المواد الدراسية </h1>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <div class="profile-data pt-5 page-subject">
            <div class="container">

                <div class="row justify-content-center mt-5 text-center">
                    <div class="col-md-4 col-6">
                        <a href="#"
                            class="subject  d-block text-decoration-none box shadow-box p-4 clr-royal-blue position-relative">
                            <div class="hex">
                                <img src="{{ asset('website/assets/img/icon-logo.png') }}" alt="">
                            </div>
                            <h3 class='mb-0 mt-5 pt-3'>القرآن الكريم</h3>
                        </a>
                    </div>
                    <div class="col-md-4 col-6">
                        <a href="#"
                            class="subject d-block text-decoration-none box shadow-box p-4 clr-royal-blue position-relative">
                            <div class="hex">
                                <img src="{{ asset('website/assets/img/icon-logo.png') }}" alt="">
                            </div>
                            <h3 class='mb-0 mt-5 pt-3'> السنة النبوية </h3>
                        </a>
                    </div>
                    <div class="col-md-4 col-6">
                        <a href="#"
                            class="subject d-block text-decoration-none box shadow-box p-4 clr-royal-blue position-relative">
                            <div class="hex">
                                <img src="{{ asset('website/assets/img/icon-logo.png') }}" alt="">
                            </div>
                            <h3 class='mb-0 mt-5 pt-3'> الفقه والعقيدة </h3>
                        </a>
                    </div>
                    <div class="col-md-4 col-6">
                        <a href="#"
                            class="subject d-block text-decoration-none box shadow-box p-4 clr-royal-blue position-relative">
                            <div class="hex">
                                <img src="{{ asset('website/assets/img/icon-logo.png') }}" alt="">
                            </div>
                            <h3 class='mb-0 mt-5 pt-3'> الفقه والعقيدة </h3>
                        </a>
                    </div>
                </div>

            </div>
        </div>


        <svg style="visibility: hidden; position: absolute;" width="0" height="0"
            xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                        result="goo" />
                    <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                </filter>
            </defs>
        </svg>

    </div> <!-- End Page -->
@endsection
