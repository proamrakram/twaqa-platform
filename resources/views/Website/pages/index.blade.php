@extends('Website.partials.layout')
@section('content')
    <div class="latest-news overflow-hidden py-2 px-3 position-relative">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-2 col-md-1">
                    <h4 class='h6 m-0'>آخر الأخبار</h4>
                </div>
                <div class="col-10 col-md-11">
                    <div class="owl-carousel"
                        data-angle-right="<img src='{{ asset('website/assets/img/angle-right.svg') }}' />"
                        data-angle-left="<img src='{{ asset('website/assets/img/angle-left.svg') }}' />">
                        <div class='item'> <a href="#"> تهنئة بالحصول على السند المتصل , أجمل التهاني والتبريكات
                                المقدمة من أكاديمية تواقة للطالب عبد السلام مُنير المنبلوطي بمناسبة حُصوله على السند المتصل
                                إلى رسول الله صلى الله عليه وسلم </a> </div>
                        <div class='item'> <a href="#"> Vanilla marquee is awesome! 2 </a> </div>
                        <div class='item'> <a href="#"> Vanilla marquee is awesome! 3 </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="intro-twaqa pt-4 pb-5 position-relative">
        <!-- <img src="assets/img/bg_intro.png" class='w-100 h-100 position-absolute' alt=""> -->
        <div class="container">
            <div class="heading text-center pb-5 mb-4">
                <h1 class='h3 fw-bold mt-0 mb-2 pt-5 clr-baby-blue'> تعلم القرآن الكريم أون لاين </h1>
                <h3 class='h1 text-white font-white  '>خيركم من تعلم القُرأن وعلمه </h3>
            </div>
            <div class="form mb-5 pb-5">
                <form action="">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6">
                            <div class="row g-0">
                                <div class="col-md-4 first">
                                    <select name="" id="" class='select2'>
                                        @foreach (getCoursesTypes() as $course_type)
                                            <option value="{{ $course_type->id }}"> {{ $course_type->title }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 ">
                                    <select name="" id="" class='select2'>
                                        @foreach (getTeachers() as $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->full_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3 last">
                                    <select name="" id="" class='select2'>
                                        <option value=""> الموعد المتاح به </option>
                                        <option value=""> الموعد المتاح به </option>
                                        <option value=""> الموعد المتاح به </option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button class='btn-green'> <i class='fa fa-search fa-2x'></i> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            @guest
                <div class="btns d-flex align-items-center justify-content-center mb-5 pb-5">
                    <a href="#" class='btn-green ms-2 btn-lg'> حساب جديد </a>
                    <a href="#" class='btn-outline btn-lg'> حصة تجريبية </a>
                </div>
            @endguest

            <br>

        </div>
    </div>
    <!-- End Intro -->

    <!-- About -->
    <section class="about text-center pt-5 pb-md-5 pb-3">
        <div class="container">
            <h2 class='h1 fw-bold mb-3'>من نحن</h2>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <p>{{ $about_description }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /End About -->

    <!-- Mission/Vision -->
    <section class='mision-vision pt-5 mt-3 pb-2 pb-md-5'>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="box text-center p-md-5 p-2 position-relative rounded">
                        <div class="icon">
                            <img src="{{ asset('website/assets/img/icon-logo.png') }}" alt="">
                        </div>
                        <div class="content mt-4">
                            <h2 class='mb-md-4 mb-2  mt-md-0 mt-5 pt-2 pt-md-0 clr-royal-blue fw-bolder'>رؤيتنا</h2>
                            <p class='mx-5 mb-0 text-black'>{{ $vision }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box text-center p-md-5 p-2 position-relative rounded">
                        <div class="icon">
                            <img src="{{ asset('website/assets/img/icon-logo.png') }}" alt="">
                        </div>
                        <div class="content mt-4">
                            <h2 class='mb-md-4  mb-2 mt-md-0 mt-5 pt-2 pt-md-0 clr-royal-blue fw-bolder'>رسالتنا</h2>
                            <p class='mx-5 mb-0 text-black'>{{ $message }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mission/Vision -->

    <!-- Subjects -->
    <section class="subjects text-center pt-0 pb-2 pb-mb-5 pt-md-4">
        <div class="container">
            <h2 class="h1 fw-bold clr-royal-blue pb-5 mb-5"> المواد الدراسية </h2>
            <div class="row justify-content-center">

                @foreach ($lessons_types as $lesson_type)
                    <div class="col-md-4 col-6">
                        <a href="#"
                            class="subject d-block text-decoration-none box shadow-box p-4 clr-royal-blue position-relative">
                            <div class="hex">
                                <img src="{{ asset('website/assets/img/icon-logo.png') }}" alt="">
                            </div>
                            <h3 class='mb-0 mt-5 pt-3'>{{ $lesson_type->title }}</h3>
                        </a>
                    </div>
                @endforeach

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

    </section>
    <!-- End Subjects -->

    <!-- Start Packages -->
    <section class="packages pt-5 mt-md-5 mt-0 pb-5 text-center">
        <div class="container">
            <h2 class="h1 text-white fw-bold pt-3 pb-3"> الباقات </h2>
            <div class="row mt-5 pt-4 pb-4">
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
            </div>

            <a href="#" class="btn-green ms-2 btn-lg d-inline-block mt-md-5 mt-0 mb-md-4 text-white"> عرض المزيد
            </a>
        </div>
    </section>
    <!-- End Packages -->

    <!-- Courses -->
    <section class="courses pt-5 pb-4 text-center position-relative">

        <h2 class="h1 clr-royal-blue fw-bold pt-3 "> كورساتنا المميزة </h2>
        <div class="owl-carousel">


            @foreach (getCourses() as $course)
                <div class="item">
                    <div class="course shadow-box bg-white my-4 rounded-lg overflow-hidden">
                        <a href="#" class='img'>
                            <img src="{{ asset('website/assets/img/img_slider.png') }}" alt="">
                        </a>
                        <div class="content p-3">
                            <h3 class="fw-bold"> <a href="#" class='text-decoration-none text-dark'>
                                    {{ $course->name }}</a> </h3>
                            <p>
                                {{ $course->description }}
                            </p>
                            <div class="price fw-bold d-flex justify-content-center">
                                <div class="normal-price ps-3">750.00 ج.م</div>
                                <div class="discount-price"> <span class="text-decoration-line-through"> 1500 ج.م </span>
                                </div>
                            </div>
                            <div class="btns pt-3">
                                <a href="#" class="btn-outline btn-main-clr mb-2 btn-lg"> حصة تجريبية </a>
                                <a href="#" class="btn-green text-white  btn-lg"> <i
                                        class='fa-regular fa-plus'></i>
                                    إشترك الأن </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="#" class="btn-outline ms-2 btn-lg d-inline-block mt-5  clr-royal-blue"> عرض المزيد </a>
        </div>
    </section>
    <!-- End Courses -->

    <section class="teachers pt-5 mt-md-4 mt-0">

        <h2 class="h1 clr-royal-blue fw-bold pt-3 text-center"> معلمون مُتميزون </h2>
        <div class="owl-carousel">

            @foreach (getOutstandingTeachers() as $teacher)
                <div class="item">
                    <div class="teacher box-content-vid shadow-box bg-white my-4 rounded-lg">
                        <div class="heading d-flex justify-content-around position-relative">
                            <span class='completed'> جدول مكتمل <i class="fa-solid fa-check"></i> </span>
                            <div class="img align-self-center position-relative">
                                <a href="teacher-single.php">
                                    <img src="{{ asset('website/assets/img/user_teacher.jpg') }}" alt="">
                                </a>
                                <div class="btns-play">
                                    <div class="icon"><i class="fa-solid fa-play"></i></div>
                                </div>
                            </div>
                            <div class="price-teacher">
                                <span class='font-number fw-bold'> 15 </span>
                                <span>جـــنيه</span>
                                <span>للساعة</span>
                            </div>
                            <div class="btns-link d-flex justify-content-around">
                                <a href="#" class='btn-green text-white  btn-lg btn-show-vid'
                                    data-vid-id='bTqVqk7FSmY' data-bs-toggle="modal" data-bs-target="#vidInfoTeacher"> <i
                                        class="fa-brands fa-youtube"></i> شاهد فيديو </a>
                                <a href="#" class='btn-outline btn-lg clr-royal-blue btn-play-audio'
                                    data-url='https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3'>
                                    <i class="fa-solid fa-microphone"></i> إسمع صوتي </a>
                            </div>
                        </div>
                        <div class="content text-center pt-4">
                            <h3 class='h4 mb-0 title'> <a href="{{ route('teacher.single', $teacher->id) }}"
                                    class='text-decoration-none clr-royal-blue'>{{ $teacher->full_name }}</a> </h3>
                            <p class='mb-2'>{{ getCountryName($teacher->country_id) }}</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class='stars'>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <span class='me-2 font-number fw-bold'>10</span>
                            </div>
                            <div class="desc py-3 px-4">
                                <p class='mb-0'>
                                    {{ $teacher->description }}
                                </p>

                            </div>
                            <div class="tags text-center mb-4 mt-2">
                                @foreach (getTeacherCourses($teacher->id) as $course)
                                    <a href="#">{{ $course->name }} </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center my-3">
            <a href="{{ route('teachers') }}" class="btn-green text-white d-inline-block btn-lg"> عرض المزيد </a>
        </div>


        <!-- Modal Video vidInfoTeacher -->
        <div class="modal fade" id="vidInfoTeacher" tabindex="-1" aria-labelledby="vidInfoTeacherLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="vidInfoTeacherLabel"> </h1>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="content"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- When Click Audio -->
        <div class="audio-player">
            <i class="fa-solid fa-xmark"></i>
            <audio crossorigin playsinline controls>
                <source src="" type="audio/mp3">
            </audio>
        </div>

    </section>

    <!-- Watch Video -->
    <section class="watch-vid pt-5 pb-5 mt-5">
        <div class="container">
            <h2 class="h1 text-white fw-bold pt-md-3 pt-0 text-center mb-md-5  mb-4"> شاهد كيف نعمل </h2>
            <div id="playerTwaqa" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"></div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonsails pt-5 pb-5 text-center">
        <h2 class="h1 clr-royal-blue fw-bold pt-3  mb-3"> ماذا قالوا عنا؟ </h2>
        <div class="owl-carousel">

            @foreach ($testimonials as $testimonial)
                <div class="item">
                    <div class="testimonal text-center position-relative shadow-box bg-white p-4 my-4 rounded-lg">
                        <img src="{{ asset('website/assets/img/img_testimonal.png') }}" alt="">
                        <i class="fa-solid fa-quote-right position-absolute top-50 start-50 translate-middle"></i>
                        <div class="content position-relative">
                            <p>
                                {{ $testimonial->opinion }}
                            </p>
                            <h5 class='fw-bold'>{{ $testimonial->name }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>


    <!-- Sections - Categories -->
    <section class="categories  pt-5 pb-5 mt-md-3 mt-0 text-center">
        <div class="container">
            <h2 class="h1 clr-royal-blue fw-bold pt-3  mb-5"> أقسام الأكاديمية </h2>
            <div class="row">


                @foreach ($courses_categories as $course_category)
                    <div class="col-md-3 col-6">
                        <a href="#"
                            class="cat d-block shadow-box mb-3 bg-white p-3 rounded-lg clr-royal-blue text-decoration-none">
                            <div class="img">
                                <img src="{{ asset('website/assets/img/icon-child.png') }}" alt="">
                            </div>
                            <h4 class='mt-3 mb-0'>{{ $course_category->title }}</h4>
                        </a>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <!-- Section Join Us -->
    <section class="join-us mt-5">
        <div class="container">
            <div class="box shadow-box bg-white p-5 rounded-lg position-relative overflow-hidden">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="h1 clr-royal-blue fw-bold mb-3"> إنضم إلى فريق العمل </h2>
                        <p>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                            التطبيق.
                        </p>
                        <a href="#" class="btn-green text-white d-inline-block btn-lg mt-2"> <i
                                class="fa-regular fa-eye"></i> عرض الوظائف المتاحة </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq mt-md-5 mt-3 pt-4 mb-5">
        <div class="container ">
            <h2 class="h1 clr-royal-blue fw-bold mb-4 text-center"> الأسئلة الشائعة </h2>
            <div class="accordion" id="accordionExample">

                @foreach ($faqs as $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_{{ $faq->id }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_{{ $faq->id }}" aria-expanded="false"
                                aria-controls="collapse_{{ $faq->id }}">
                                {{ $faq->question }}
                            </button>
                        </h2>
                        <div id="collapse_{{ $faq->id }}" class="accordion-collapse collapse"
                            aria-labelledby="heading_2" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $faq->answer }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
