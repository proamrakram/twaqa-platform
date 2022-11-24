@extends('Website.partials.layout')
@section('content')
    <div class="page page-data mb-5">

        <header class="header-page">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-3 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"> الرئيسية </a></li>
                        <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('about.us') }}"> من نحن </a> </li>
                        <li class="breadcrumb-item active" aria-current="page"> الكورسات </li>
                    </ol>
                </nav>
                <div class="heading-page shadow-box  bg-white rounded-lg mb-4 p-4"
                    style='background-image: url({{ asset('website/assets/img/img15.png') }});background-position: center right;background-size: 100%;'>
                    <h1 class="h1 text-white text-center fw-bold  mb-0 pt-md-5 pt-3 mt-md-3"> الكورسات </h1>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <div class="profile-data pt-5 page-package">
            <div class="container">
                <div class="row">

                    @foreach ($courses as $course)
                        <div class="col-md-4">
                            <div class="course shadow-box bg-white my-4 rounded-lg overflow-hidden text-center mb-3">
                                <a href="#" class='img'>
                                    <img src="{{ asset('website/assets/img/img_slider.png') }}" alt="">
                                </a>
                                <div class="content p-3">
                                    <h3 class="fw-bold"><a href="#"
                                            class='text-decoration-none text-dark'>{{ $course->name }} </a></h3>
                                    <p>
                                        {{ $course->description }}
                                    </p>
                                    <div class="price fw-bold d-flex justify-content-center">
                                        <div class="normal-price ps-3">750.00 ج.م</div>
                                        <div class="discount-price"> <span class="text-decoration-line-through"> 1500 ج.م
                                            </span> </div>
                                    </div>
                                    <div class="btns pt-3">
                                        <a href="#" class="btn-outline btn-main-clr mb-2 btn-lg"> حصة تجريبية </a>
                                        <a href="#" class="btn-green text-white  btn-lg"> <i
                                                class='fa-regular fa-plus'></i> إشترك الأن </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>



                <nav aria-label="...">
                    <ul class="pagination mt-5 p-0 mb-5 d-flex justify-content-end">
                        <li class="page-item disabled">
                            <span class="page-link"> <i class="fa-solid fa-forward-step"></i> </span>
                            <span class="page-link"> <i class="fa-solid fa-chevron-right"></i></span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">2</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="fa-solid fa-chevron-left"></i> </a>
                            <a class="page-link" href="#"> <i class="fa-solid fa-backward-step"></i></a>
                        </li>

                    </ul>
                </nav>


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
