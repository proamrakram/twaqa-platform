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
                        <a class="nav-link active" href="{{ route('index') }}" aria-current="page">الرئيسية</a>
                    </li>

                    <li class="nav-item menu-dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            من نحن
                        </a>
                        <ul class="">
                            <li><a href="{{ route('about.us') }}">من نحن</a></li>
                            <li><a href="{{ route('vision.mision') }}"> رسالتنا ورؤيتنا </a></li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item menu-dropdown"> --}}
                    <a class="nav-link" href="{{ route('courses') }}" role="button">
                        الكورسات
                    </a>
                    {{-- <ul class="">
                            <li><a href="{{ route('courses') }}">All</a></li>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                        </ul> --}}
                    </li>

                    <li class="nav-item"> <a class="nav-link" href="{{ route('packages') }}">الأسعار </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('teachers') }}">المعلمون </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('vid_watch') }}">المرئيات </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('contact_us') }}">إتصل بنا </a> </li>
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
                                        class='span-lang'>اللغة العربية</span> </span>
                            </a>
                            <ul>


                                <li>
                                    <a href="{{ route('set.lang', ['lang' => 'sp']) }}"> <img
                                            src="{{ asset('website/assets/img/united-kingdom.svg') }}"
                                            class='ms-1' /> اللغة
                                        الانجليزية </a>
                                </li>

                                <li>
                                    <a href="{{ route('set.lang', ['lang' => 'en']) }}"> <img
                                            src="{{ asset('website/assets/img/united-kingdom.svg') }}"
                                            class='ms-1' /> اللغة
                                        الانجليزية </a>
                                </li>

                                <li>
                                    <a href="{{ route('set.lang', ['lang' => 'ar']) }}"> <img
                                            src="{{ asset('website/assets/img/saudi-arabia.svg') }}" class='ms-1' />
                                        اللغة
                                        العربية </a>
                                </li>
                            </ul>
                        </li>
                    </ul>


                    @guest
                        <div class="btns d-flex ">
                            <a href="{{ route('signin') }}" class='btn-green ms-2'> <i class="fa-regular fa-user"></i>
                                تسجيل الدخول
                            </a>
                            <a href="{{ route('signup') }}" class='btn-outline'> <i class="fa-regular fa-plus"></i>
                                إنشاء حساب </a>
                        </div>
                    @endguest



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


                    @auth
                        <div class="btn-user-profile">
                            <ul class="menu-dropdown dropdown-lang ms-4">
                                <li class="">
                                    <a href="#">
                                        <img src="{{ asset('website/assets/img/img-std.png') }}"
                                            style='width:30px;height:30px;padding:2px' class='rounded-circle border'
                                            alt="">
                                    </a>
                                    <ul>

                                        @if (auth()->user()->user_type == 'teacher')
                                            <li>
                                                <a href="{{ route('teacher.home') }}"> الملف الشخصي </a>
                                            </li>
                                        @endif

                                        @if (auth()->user()->user_type == 'student')
                                            <li>
                                                <a href="#"> الملف الشخصي </a>
                                            </li>
                                        @endif



                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" style="background: none;  border: none;  ">
                                                    تسجيل الخروج </button>
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



    @if (session('success'))
        <div class="container mt-4">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>إشعار! </strong>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    @if (session('error'))
        <div class="container mt-4">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>إشعار! </strong>{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @auth

        @if (auth()->user()->user_type == 'teacher')

            @if (check_basic_teacher_data() || !check_qualifications() || !check_certificates() || !check_ejazats())
                <div class="container mt-4">


                    <div class="alert alert-warning" role="alert">
                        <h5 class='fw-bold'>أرجو منك عزيزي ان تقوم بإمكال بياناتك على ملفك الشخصي: </h5>
                        <ul class='mb-0'>
                            @if (check_basic_teacher_data())
                                <li>
                                    <a href="{{ route('teacher.data.basic') }}" class='text-decoration-none text-dark'>
                                        إكمال
                                        البيانات
                                        الشخصية </a>
                                </li>
                            @endif

                            @if (!check_qualifications())
                                <li><a href="{{ route('teacher.qualifications') }}"
                                        class='text-decoration-none text-dark'>
                                        إكمال المؤهلات </a></li>
                            @endif

                            @if (!check_certificates())
                                <li><a href="{{ route('teacher.certificates') }}" class='text-decoration-none text-dark'>
                                        إكمال الشهادات </a></li>
                            @endif

                            @if (!check_ejazats())
                                <li><a href="{{ route('teacher.ejazat') }}" class='text-decoration-none text-dark'> إكمال
                                        الاجازات </a>
                                </li>
                            @endif





                            {{-- <li><a href="{{ route('teacher.video.audio') }}" class='text-decoration-none text-dark'> إرفاق
                                ملف صوت وفيديو
                            </a></li> --}}


                            {{-- <li><a href="{{route()}}calander_lessons.php" class='text-decoration-none text-dark'> الأوقات المتاحة </a></li> --}}


                        </ul>
                    </div>
                </div>
            @endif
        @endif

    @endauth
