@extends('Website.partials.layout')
@section('content')
    <div class="page page-data mb-5">

        <header class="header-page">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-3 mb-0">
                        <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                        <li class="breadcrumb-item active" aria-current="page"> تسجيل الدخول </li>
                    </ol>
                </nav>
                <div class="heading-page shadow-box  bg-white rounded-lg mb-4 p-4"
                    style='background-image: url({{ asset('website/assets/img/img18.png') }});background-position: left center;background-size: contain;'>
                    <h1 class="h1 text-white text-center fw-bold  mb-0 pt-md-5 pt-3 mt-md-3 clr-royal-blue"> تسجيل الدخول
                    </h1>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <div class="profile-data pt-5 page-register">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="p-md-4 p-3 rounded-lg shadow-sm bg-white">
                            <h4 class='text-center mb-4 clr-royal-blue'> تسجيل الدخول </h4>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="row g-3">

                                    <div class="col-12">
                                        <label for=""> البريد الإلكتروني <span class='star'><i
                                                    class="fa-solid fa-star-of-life"></i></span> </label>
                                        <input type="email" name="email" class='input-style'>
                                    </div>

                                    <div class="col-12 position-relative reset-password">
                                        <label for=""> كلمة المرور <span class='star'><i
                                                    class="fa-solid fa-star-of-life"></i></span> </label>
                                        <input type="password" name="password" class='input-style'>
                                        <i
                                            class="fa-regular d-block fa-eye position-absolute top-50 start-0 translate-middle-y ps-4 pt-4"></i>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn-green ms-2 text-white p-3">
                                            <i class="fa-solid fa-arrow-right-to-bracket ms-2"></i> تسجيل الدخول
                                        </button>
                                    </div>

                                </div>
                            </form>
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
