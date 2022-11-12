@extends('Website.partials.layout')
@section('content')
    <div class="page">

        <header class="header-page">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-4 mb-0">
                        <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                        <li class="breadcrumb-item active" aria-current="page">المعلمون</li>
                    </ol>
                </nav>
                <div class="heading-page shadow-box  bg-white rounded-lg mb-4 d-flex align-items-center justify-content-center"
                    style='background-image: url(assets/img/bg_img_teach.png)'>
                    <h1 class="h1 clr-royal-blue fw-bold text-center mb-0"> المعلمون </h1>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <form action="" class='form'>
            <div class="container">
                <div class="row g-0 justify-content-center">
                    <div class="col first">
                        <label for="" class='label-form'> الموعد المتاح به </label>
                        <div class="input-icon position-relative pl-2">
                            <input type="text" data-toggle="datepicker">
                            <i
                                class="fa-regular fa-calendar position-absolute top-50 start-0 translate-middle-y ms-2 gray-clr"></i>
                        </div>
                    </div>
                    <div class="col">
                        <label for="" class='label-form'> القسم </label>
                        <select name="" id="" class='select2'>
                            <option value=""> التخصص </option>
                            <option value=""> التخصص </option>
                            <option value=""> التخصص </option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="" class='label-form'> نوع المعلم </label>
                        <select name="" id="" class='select2'>
                            <option value=""> حدد </option>
                            <option value=""> حدد </option>
                            <option value=""> حدد </option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="" class='label-form'> التخصص </label>
                        <select name="" id="" class='select2'>
                            <option value=""> اختر التخصص </option>
                            <option value=""> اختر التخصص </option>
                            <option value=""> اختر التخصص </option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="" class='label-form'> عدد الأشخاص </label>
                        <select name="" id="" class='select2'>
                            <option value=""> حدد </option>
                            <option value=""> حدد </option>
                            <option value=""> حدد </option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <label for="" class='label-form opacity-0'> submit </label>
                        <button class='btn-green'> <i class='fa fa-search fa-2x'></i> </button>
                    </div>
                </div>
            </div>
        </form>


        <div class="results-teachers mt-4">

            <div class="container">
                <div class="row g-3">

                    <div class="col-md-4">
                        <div class="teacher box-content-vid shadow-box bg-white  rounded-lg">
                            <div class="heading d-flex justify-content-around position-relative">
                                <span class='not-completed opacity-0'> not-completed </span>
                                <div class="img align-self-center position-relative">
                                    <a href="teacher-single.php">
                                        <img src="assets/img/user_teacher.jpg" alt="">
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
                                        data-vid-id='bTqVqk7FSmY' data-bs-toggle="modal" data-bs-target="#vidInfoTeacher">
                                        <i class="fa-brands fa-youtube"></i> شاهد فيديو </a>
                                    <a href="#" class='btn-outline btn-lg clr-royal-blue btn-play-audio'
                                        data-url='https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3'>
                                        <i class="fa-solid fa-microphone"></i> إسمع صوتي </a>
                                </div>
                            </div>
                            <div class="content text-center pt-4">
                                <h3 class='h4 mb-0 title'> <a href="teacher-single.php"
                                        class='text-decoration-none clr-royal-blue'> محمد سليمان عمران </a> </h3>
                                <p class='mb-2'>جمهورية مصر العربية</p>
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
                                    <p class='mb-0'>معلم ومُحفظ للقرآن الكريم بالتجويد حاصل على شهادة من الحرم النبوي
                                        لحفظ القرآن الكريم.</p>
                                </div>
                                <div class="tags text-center mb-4 mt-2">
                                    <a href="#"> القرأن الكريم وعلومه </a>
                                    <a href="#"> الفقه الإسلامي </a>
                                    <a href="#"> السنة النبوية </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-md-4">
                        <div class="teacher box-content-vid shadow-box bg-white  rounded-lg">
                            <div class="heading d-flex justify-content-around position-relative">
                                <span class='not-completed opacity-0'> not-completed </span>
                                <div class="img align-self-center position-relative">
                                    <a href="teacher-single.php">
                                        <img src="assets/img/user_teacher.jpg" alt="">
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
                                        data-vid-id='bTqVqk7FSmY' data-bs-toggle="modal"
                                        data-bs-target="#vidInfoTeacher"> <i class="fa-brands fa-youtube"></i> شاهد فيديو
                                    </a>
                                    <a href="#" class='btn-outline btn-lg clr-royal-blue btn-play-audio'
                                        data-url='https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3'>
                                        <i class="fa-solid fa-microphone"></i> إسمع صوتي </a>
                                </div>
                            </div>
                            <div class="content text-center pt-4">
                                <h3 class='h4 mb-0 title'> <a href="teacher-single.php"
                                        class='text-decoration-none clr-royal-blue'> محمد سليمان عمران </a> </h3>
                                <p class='mb-2'>جمهورية مصر العربية</p>
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
                                    <p class='mb-0'>معلم ومُحفظ للقرآن الكريم بالتجويد حاصل على شهادة من الحرم النبوي
                                        لحفظ القرآن الكريم.</p>
                                </div>
                                <div class="tags text-center mb-4 mt-2">
                                    <a href="#"> القرأن الكريم وعلومه </a>
                                    <a href="#"> الفقه الإسلامي </a>
                                    <a href="#"> السنة النبوية </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-md-4">
                        <div class="teacher box-content-vid shadow-box bg-white  rounded-lg">
                            <div class="heading d-flex justify-content-around position-relative">
                                <span class='completed'> جدول مكتمل <i class="fa-solid fa-check"></i> </span>
                                <div class="img align-self-center position-relative">
                                    <a href="teacher-single.php">
                                        <img src="assets/img/user_teacher.jpg" alt="">
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
                                        data-vid-id='bTqVqk7FSmY' data-bs-toggle="modal"
                                        data-bs-target="#vidInfoTeacher"> <i class="fa-brands fa-youtube"></i> شاهد فيديو
                                    </a>
                                    <a href="#" class='btn-outline btn-lg clr-royal-blue btn-play-audio'
                                        data-url='https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3'>
                                        <i class="fa-solid fa-microphone"></i> إسمع صوتي </a>
                                </div>
                            </div>
                            <div class="content text-center pt-4">
                                <h3 class='h4 mb-0 title'> <a href="teacher-single.php"
                                        class='text-decoration-none clr-royal-blue'> محمد سليمان عمران </a> </h3>
                                <p class='mb-2'>جمهورية مصر العربية</p>
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
                                    <p class='mb-0'>معلم ومُحفظ للقرآن الكريم بالتجويد حاصل على شهادة من الحرم النبوي
                                        لحفظ القرآن الكريم.</p>
                                </div>
                                <div class="tags text-center mb-4 mt-2">
                                    <a href="#"> القرأن الكريم وعلومه </a>
                                    <a href="#"> الفقه الإسلامي </a>
                                    <a href="#"> السنة النبوية </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-md-4">
                        <div class="teacher box-content-vid shadow-box bg-white  rounded-lg">
                            <div class="heading d-flex justify-content-around position-relative">
                                <span class='completed'> جدول مكتمل <i class="fa-solid fa-check"></i> </span>
                                <div class="img align-self-center position-relative">
                                    <a href="teacher-single.php">
                                        <img src="assets/img/user_teacher.jpg" alt="">
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
                                        data-vid-id='bTqVqk7FSmY' data-bs-toggle="modal"
                                        data-bs-target="#vidInfoTeacher"> <i class="fa-brands fa-youtube"></i> شاهد فيديو
                                    </a>
                                    <a href="#" class='btn-outline btn-lg clr-royal-blue btn-play-audio'
                                        data-url='https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3'>
                                        <i class="fa-solid fa-microphone"></i> إسمع صوتي </a>
                                </div>
                            </div>
                            <div class="content text-center pt-4">
                                <h3 class='h4 mb-0 title'> <a href="teacher-single.php"
                                        class='text-decoration-none clr-royal-blue'> محمد سليمان عمران </a> </h3>
                                <p class='mb-2'>جمهورية مصر العربية</p>
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
                                    <p class='mb-0'>معلم ومُحفظ للقرآن الكريم بالتجويد حاصل على شهادة من الحرم النبوي
                                        لحفظ القرآن الكريم.</p>
                                </div>
                                <div class="tags text-center mb-4 mt-2">
                                    <a href="#"> القرأن الكريم وعلومه </a>
                                    <a href="#"> الفقه الإسلامي </a>
                                    <a href="#"> السنة النبوية </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-md-4">
                        <div class="teacher box-content-vid shadow-box bg-white  rounded-lg">
                            <div class="heading d-flex justify-content-around position-relative">
                                <span class='completed'> جدول مكتمل <i class="fa-solid fa-check"></i> </span>
                                <div class="img align-self-center position-relative">
                                    <a href="teacher-single.php">
                                        <img src="assets/img/user_teacher.jpg" alt="">
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
                                        data-vid-id='bTqVqk7FSmY' data-bs-toggle="modal"
                                        data-bs-target="#vidInfoTeacher"> <i class="fa-brands fa-youtube"></i> شاهد فيديو
                                    </a>
                                    <a href="#" class='btn-outline btn-lg clr-royal-blue btn-play-audio'
                                        data-url='https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3'>
                                        <i class="fa-solid fa-microphone"></i> إسمع صوتي </a>
                                </div>
                            </div>
                            <div class="content text-center pt-4">
                                <h3 class='h4 mb-0 title'> <a href="teacher-single.php"
                                        class='text-decoration-none clr-royal-blue'> محمد سليمان عمران </a> </h3>
                                <p class='mb-2'>جمهورية مصر العربية</p>
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
                                    <p class='mb-0'>معلم ومُحفظ للقرآن الكريم بالتجويد حاصل على شهادة من الحرم النبوي
                                        لحفظ القرآن الكريم.</p>
                                </div>
                                <div class="tags text-center mb-4 mt-2">
                                    <a href="#"> القرأن الكريم وعلومه </a>
                                    <a href="#"> الفقه الإسلامي </a>
                                    <a href="#"> السنة النبوية </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-md-4">
                        <div class="teacher box-content-vid shadow-box bg-white  rounded-lg">
                            <div class="heading d-flex justify-content-around position-relative">
                                <span class='completed'> جدول مكتمل <i class="fa-solid fa-check"></i> </span>
                                <div class="img align-self-center position-relative">
                                    <a href="teacher-single.php">
                                        <img src="assets/img/user_teacher.jpg" alt="">
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
                                        data-vid-id='bTqVqk7FSmY' data-bs-toggle="modal"
                                        data-bs-target="#vidInfoTeacher"> <i class="fa-brands fa-youtube"></i> شاهد فيديو
                                    </a>
                                    <a href="#" class='btn-outline btn-lg clr-royal-blue btn-play-audio'
                                        data-url='https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3'>
                                        <i class="fa-solid fa-microphone"></i> إسمع صوتي </a>
                                </div>
                            </div>
                            <div class="content text-center pt-4">
                                <h3 class='h4 mb-0 title'> <a href="teacher-single.php"
                                        class='text-decoration-none clr-royal-blue'> محمد سليمان عمران </a> </h3>
                                <p class='mb-2'>جمهورية مصر العربية</p>
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
                                    <p class='mb-0'>معلم ومُحفظ للقرآن الكريم بالتجويد حاصل على شهادة من الحرم النبوي
                                        لحفظ القرآن الكريم.</p>
                                </div>
                                <div class="tags text-center mb-4 mt-2">
                                    <a href="#"> القرأن الكريم وعلومه </a>
                                    <a href="#"> الفقه الإسلامي </a>
                                    <a href="#"> السنة النبوية </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Col -->






                </div>
            </div>


            <div class="container">
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

        </div>
        <!-- end reasults -->

    </div> <!-- End Page -->
@endsection
