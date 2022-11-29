<html lang="{{ session()->get('lang') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#070947" />

    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('website/assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('website/assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('website/assets/img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('website/assets/img/site.webmanifest') }}">

    <link href="https://cdn.plyr.io/3.7.2/plyr.css" rel="stylesheet" />
    <link href="{{ asset('website/assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('website/assets/css/datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/css/main.css') }}" rel="stylesheet">
    @stack('teacher-video-audio-style')
    @stack('teacher-courses-styles')
    @stack('calander-lessons-styles')
    @stack('livewire-styles')

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-twaqa">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src='{{ asset('website/assets/img/Logo.svg') }}' />
            </a>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index') }}"
                            aria-current="page">{{ __('Main') }}</a>
                    </li>

                    <li class="nav-item menu-dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ __('Who We Are') }} </a>
                        <ul class="">
                            <li><a href="{{ route('about.us') }}">{{ __('Who We Are') }}</a></li>
                            <li><a href="{{ route('vision.mision') }}"> {{ __('Vision and Mission') }}</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item menu-dropdown"> --}}
                    <a class="nav-link" href="{{ route('courses') }}" role="button">
                        {{ __('Courses') }}
                    </a>
                    {{-- <ul class="">
                            <li><a href="{{ route('courses') }}">All</a></li>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                        </ul> --}}
                    </li>

                    <li class="nav-item"> <a class="nav-link" href="{{ route('packages') }}"> {{ __('Packages') }}
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('teachers') }}">{{ __('Teachers') }} </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('vid_watch') }}">{{ __('Vid_Watch') }}
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('contact_us') }}">{{ __('Call Us') }}
                        </a> </li>
                </ul>
            </div>

            <div class="mobile-navbar d-flex">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>

                <div class="end-navbar d-flex align-items-center">
                    <ul class="menu-dropdown dropdown-lang ms-4">
                        <li class="">
                            <a href="#">
                                <span class=" d-flex align-items-center"> <img
                                        src='{{ asset('website/assets/img/saudi-arabia.svg') }}' class='ms-1'> <span
                                        class='span-lang'>{{ __('Arabic Language') }}</span> </span>
                            </a>
                            <ul>

                                <li>
                                    <a href="{{ route('set.lang', ['lang' => 'sp']) }}"> <img
                                            src="{{ asset('website/assets/img/united-kingdom.svg') }}"
                                            class='ms-1' /> {{ __('French Language') }}</a>
                                </li>

                                <li>
                                    <a href="{{ route('set.lang', ['lang' => 'en']) }}"> <img
                                            src="{{ asset('website/assets/img/united-kingdom.svg') }}"
                                            class='ms-1' /> {{ __('English Language') }}</a>
                                </li>

                                <li>
                                    <a href="{{ route('set.lang', ['lang' => 'ar']) }}"> <img
                                            src="{{ asset('website/assets/img/saudi-arabia.svg') }}" class='ms-1' />
                                        {{ __('Arabic Language') }}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>


                    @guest
                        <div class="btns d-flex ">
                            <a href="{{ route('signin') }}" class='btn-green ms-2'> <i class="fa-regular fa-user"></i>
                                {{ __('Sign In') }}
                            </a>
                            <a href="{{ route('signup') }}" class='btn-outline'> <i class="fa-regular fa-plus"></i>
                                {{ __('Create a new account') }} </a>
                        </div>
                    @endguest


                    @auth
                        <div class="btns-user">
                            <ul class="menu-dropdown dropdown-lang">
                                <li class="">
                                    <a href="#" class='mx-2 d-block'>
                                        <span class=" d-flex align-items-center"> <i class="fa-solid fa-bell ms-1"></i>
                                        </span>
                                    </a>
                                    <ul class=''>
                                        <div class="p-1 box-notification pe-2 pt-0 pb-0" data-scrollbar>

                                            <li class='rounded-3 border p-2 mb-1'>
                                                <a href="#"
                                                    class="d-flex gray-clr w-100 position-relative align-items-center">
                                                    <i class="fa-solid fa-bell ms-2 fs-14px"></i>
                                                    <div>
                                                        <h5 class="h6 mb-0"> عنوان الإشعار </h5>
                                                        <p class='mb-0 fs-13px text-truncate' style="max-width: 250px;">
                                                            وصف الإشعار وصف الإشعار وصف الإشعار وصف الإشعار وصف الإشعار</p>
                                                        <span class='fs-12px position-absolute top-0 start-0'>منذ ثلاث
                                                            دقائق</span>
                                                    </div>
                                                </a>
                                            </li>

                                        </div>
                                        <div class="text-center mt-2">
                                            <a href="notifications.php" class='btn-outline clr-royal-blue'> عرض جميع
                                                الإشعارات </a>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    @endauth

                    @auth
                        <div class="btn-user-profile">
                            <ul class="menu-dropdown dropdown-lang ms-4">
                                <li class="">
                                    <a href="#">
                                        <img src="{{ auth()->user()->img }}" style='width:30px;height:30px;padding:2px'
                                            class='rounded-circle border' alt="">
                                    </a>
                                    <ul>

                                        @if (auth()->user()->user_type == 'teacher')
                                            <li>
                                                <a href="{{ route('teacher.home') }}"> {{ __('Personal Data') }} </a>
                                            </li>
                                        @endif

                                        @if (auth()->user()->user_type == 'student')
                                            <li>
                                                <a href="#">{{ __('Personal Data') }}</a>
                                            </li>
                                        @endif

                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" style="background: none;  border: none;  ">
                                                    {{ __('Logout') }}</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    @endauth



                </div>
            </div>
        </div>
    </nav>

    @if ($errors->count())
        @foreach ($errors->all() as $error)
            <div class="container mt-4">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ __('Notice') }}! </strong>{{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endforeach
    @endif

    @if (session('success'))
        <div class="container mt-4">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ __('Notice') }}! </strong>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="container mt-4">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ __('Notice') }}! </strong>{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @if (session('new_register'))
        <div class="container mt-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ __('Notice') }}! </strong>{{ session('new_register') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @if (session()->has('login_user'))
        <div class="container mt-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ __('Notice') }}! </strong>{{ session('login_user') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @if (session('logout_user'))
        <div class="container mt-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ __('Notice') }}! </strong>{{ session('logout_user') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @auth
        @if (auth()->user()->user_type == 'student')
            @if (check_basic_teacher_data() || !check_qualifications())
                <div class="container mt-4">
                    <div class="alert alert-warning" role="alert">
                        <h5 class='fw-bold'>
                            {{ __('I kindly ask you to fill in your information on your personal profile:') }} </h5>
                        <ul class='mb-0'>
                            @if (check_basic_teacher_data())
                                <li>
                                    <a href="{{ route('std.data.basic') }}" class='text-decoration-none text-dark'>
                                        {{ __('Complete Personal Data') }}
                                    </a>
                                </li>
                            @endif

                            @if (!check_qualifications())
                                <li><a href="{{ route('std.qualifications') }}" class='text-decoration-none text-dark'>
                                        {{ __('Complete the Qualifications') }}

                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endif
        @endif


        @if (auth()->user()->user_type == 'teacher')
            @if (check_basic_teacher_data() || !check_qualifications() || !check_certificates() || !check_ejazats())
                <div class="container mt-4">


                    <div class="alert alert-warning" role="alert">
                        <h5 class='fw-bold'>
                            {{ __('I kindly ask you to fill in your information on your personal profile:') }} </h5>
                        <ul class='mb-0'>
                            @if (check_basic_teacher_data())
                                <li>
                                    <a href="{{ route('teacher.data.basic') }}" class='text-decoration-none text-dark'>
                                        {{ __('Complete Personal Data') }}
                                    </a>
                                </li>
                            @endif

                            @if (!check_qualifications())
                                <li><a href="{{ route('teacher.qualifications') }}"
                                        class='text-decoration-none text-dark'>
                                        {{ __('Complete the Qualifications') }}
                                    </a></li>
                            @endif

                            @if (!check_certificates())
                                <li><a href="{{ route('teacher.certificates') }}" class='text-decoration-none text-dark'>
                                        {{ __('Complete Certifications') }}
                                    </a></li>
                            @endif

                            @if (!check_ejazats())
                                <li>
                                    <a href="{{ route('teacher.ejazat') }}" class='text-decoration-none text-dark'>
                                        {{ __('Complete the Achievements') }}
                                    </a>
                                </li>
                            @endif

                        </ul>
                    </div>
                </div>
            @endif
        @endif
    @endauth
