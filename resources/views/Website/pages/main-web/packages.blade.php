@extends('Website.partials.layout')
@section('content')
    <div class="page page-data mb-5">

        <header class="header-page">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-3 mb-0">
                        <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                        <li class="breadcrumb-item" aria-current="page"> <a href="#"> من نحن </a> </li>
                        <li class="breadcrumb-item active" aria-current="page"> الأسعار </li>
                    </ol>
                </nav>
                <div class="heading-page shadow-box  bg-white rounded-lg mb-4 p-4"
                    style='background-image: url({{ asset('website/assets/img/img13.png') }});background-position: center right;background-size: 100%;'>
                    <h1 class="h1 text-white text-center fw-bold  mb-0 pt-md-5 pt-3 mt-md-3"> الأسعار </h1>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <div class="profile-data pt-5 page-package">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <select name="" id="" class='form-select form-control rounded-lg border'>
                            <option value=""> أختر الكورس </option>
                            <option value=""> أختر الكورس </option>
                            <option value=""> أختر الكورس </option>
                            <option value=""> أختر الكورس </option>
                            <option value=""> أختر الكورس </option>
                        </select>
                    </div>
                </div>


                <div class="row mt-5 pt-4 pb-4 text-center">
                    <div class="col-md-4">
                        <div class="package  shadow-box bg-white rounded-lg p-5 position-relative">
                            <div class="icon font-number fw-bold"> 1 </div>
                            <h3 class="h1 mt-4 mb-0 fw-bold clr-royal-blue font-number fw-bold">200 </h3>
                            <h4 class='clr-royal-blue'>جنيه </h4>
                            <div class="list mt-4 mb-3">
                                <p class='mb-2'> 4 ساعات شهريا </p>
                                <p class='mb-2'> 8 حلقات (حلقتان أسبوعيا ) </p>
                                <p> الحلقة 30 دقيقة </p>
                            </div>
                            <a href="#" class="btn-outline btn-lg d-block btn-main-clr"> إشترك الأن </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="package shadow-box bg-white rounded-lg p-5 position-relative">
                            <div class="icon font-number fw-bold"> 2 </div>
                            <h3 class="h1 mt-4 mb-0 fw-bold clr-royal-blue font-number fw-bold">200 </h3>
                            <h4 class='clr-royal-blue'>جنيه </h4>
                            <div class="list mt-4 mb-3">
                                <p class='mb-2'> 4 ساعات شهريا </p>
                                <p class='mb-2'> 8 حلقات (حلقتان أسبوعيا ) </p>
                                <p> الحلقة 30 دقيقة </p>
                            </div>
                            <a href="#" class="btn-outline btn-lg d-block btn-main-clr"> إشترك الأن </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="package shadow-box bg-white rounded-lg p-5 position-relative">
                            <div class="icon font-number fw-bold"> 3 </div>
                            <h3 class="h1 mt-4 mb-0 fw-bold clr-royal-blue font-number fw-bold">200 </h3>
                            <h4 class='clr-royal-blue'>جنيه </h4>
                            <div class="list mt-4 mb-3">
                                <p class='mb-2'> 4 ساعات شهريا </p>
                                <p class='mb-2'> 8 حلقات (حلقتان أسبوعيا ) </p>
                                <p> الحلقة 30 دقيقة </p>
                            </div>
                            <a href="#" class="btn-outline btn-lg d-block btn-main-clr"> إشترك الأن </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="package shadow-box bg-white rounded-lg p-5 position-relative">
                            <div class="icon font-number fw-bold"> 4 </div>
                            <h3 class="h1 mt-4 mb-0 fw-bold clr-royal-blue font-number fw-bold">200 </h3>
                            <h4 class='clr-royal-blue'>جنيه </h4>
                            <div class="list mt-4 mb-3">
                                <p class='mb-2'> 4 ساعات شهريا </p>
                                <p class='mb-2'> 8 حلقات (حلقتان أسبوعيا ) </p>
                                <p> الحلقة 30 دقيقة </p>
                            </div>
                            <a href="#" class="btn-outline btn-lg d-block btn-main-clr"> إشترك الأن </a>
                        </div>
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
