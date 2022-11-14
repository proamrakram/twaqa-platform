@extends('Website.partials.layout')
@section('title', 'المواد')
@section('content')
    <div class="page page-data page-subject mb-5 ">
        @include('Website.partials.header-heading-page')
        <div class="profile-data">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="profile-aside">
                            @include('Website.partials.teacher-side')
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="profile-data-user-boxes content-user page-subject">
                            <div class="bg-white rounded-lg border">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item video ">
                                        <h2 class="accordion-header" id="heading_2">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse_1" aria-expanded="true"
                                                aria-controls="collapse_1">
                                                السيرة النبوية
                                                <span class="badge-span"> أطفال </span>
                                            </button>
                                        </h2>
                                        <div id="collapse_1" class="accordion-collapse collapse show"
                                            aria-labelledby="heading_2" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">

                                                <div class="row align-items-center box-content-vid border-bottom p-3 g-0">
                                                    <div class="col-md-8">
                                                        <div class="d-flex align-items-center ">
                                                            <div class="icon ms-2">
                                                                <i class="fa-solid fa-video"></i>
                                                            </div>
                                                            <div class="text title">
                                                                <h4 class='h6 m-1'>الدرس الأول</h4>
                                                                <h5 class="h5 m-0">عنوان الدرس</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div
                                                            class="btns d-flex justify-content-md-end justify-content-center mt-2 mt-md-0">
                                                            <a href="#" class="btn-green ms-2 text-white btn-show-vid"
                                                                data-vid-id='bTqVqk7FSmY' data-bs-toggle="modal"
                                                                data-bs-target="#vidInfoTeacher"> <i
                                                                    class="fa-regular fa-eye"></i> عرض الدرس </a>
                                                            <a href="#" class="btn-outline clr-royal-blue" download>
                                                                <i class="fa-solid fa-download"></i> تنزيل الدرس </a>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Row -->

                                                <div class="row align-items-center box-content-vid border-bottom p-3 g-0">
                                                    <div class="col-md-8">
                                                        <div class="d-flex align-items-center ">
                                                            <div class="icon ms-2">
                                                                <i class="fa-solid fa-file"></i>
                                                            </div>
                                                            <div class="text title">
                                                                <h4 class='h6 m-1'>الدرس الثاني</h4>
                                                                <h5 class="h5 m-0">عنوان الدرس</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div
                                                            class="btns d-flex justify-content-md-end justify-content-center mt-2 mt-md-0">
                                                            <a href="#" class="btn-green ms-2 text-white btn-show-vid"
                                                                data-vid-id='files/pdf-test.pdf' data-type-content='pdf'
                                                                data-bs-toggle="modal" data-bs-target="#vidInfoTeacher"> <i
                                                                    class="fa-regular fa-eye"></i> عرض الدرس </a>
                                                            <a href="files/pdf-test.pdf" class="btn-outline clr-royal-blue"
                                                                download> <i class="fa-solid fa-download"></i> تنزيل الدرس
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Row -->

                                                <div class="row align-items-center box-content-vid border-bottom p-3 g-0">
                                                    <div class="col-md-8">
                                                        <div class="d-flex align-items-center ">
                                                            <div class="icon ms-2">
                                                                <i class="fa-solid fa-microphone"></i>
                                                            </div>
                                                            <div class="text title">
                                                                <h4 class='h6 m-1'>الدرس الثالث</h4>
                                                                <h5 class="h5 m-0">عنوان الدرس</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div
                                                            class="btns d-flex justify-content-md-end justify-content-center mt-2 mt-md-0">
                                                            <a href="#"
                                                                class="btn-green ms-2 text-white btn-play-audio"
                                                                data-url='https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3'>
                                                                <svg class='ms-1' width="14" height="16"
                                                                    viewBox="0 0 14 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M2.79801 11.2406C2.96903 11.2406 3.13591 11.2932 3.276 11.3913L9.02217 15.415C9.57447 15.8017 10.3335 15.4066 10.3335 14.7324V1.2674C10.3335 0.593155 9.57447 0.198042 9.02217 0.584782L3.276 4.60843C3.13591 4.70652 2.96903 4.75914 2.79801 4.75914H1.16683C0.706592 4.75914 0.333496 5.13224 0.333496 5.59248V10.4073C0.333496 10.8675 0.706592 11.2406 1.16683 11.2406H2.79801ZM2.79801 9.57396H2.00016V6.42581H2.79801C3.31108 6.42581 3.81172 6.26795 4.23199 5.97367L8.66683 2.86825V13.1315L4.23199 10.0261C3.81172 9.73182 3.31108 9.57396 2.79801 9.57396Z"
                                                                        fill="white" />
                                                                    <path
                                                                        d="M12.3577 4.96348C12.1586 4.65714 11.755 4.57435 11.4563 4.77858C11.1577 4.98282 11.0769 5.39672 11.2761 5.70307C11.5573 6.13581 11.7385 6.45743 11.8556 6.78984C11.9695 7.11337 12.0335 7.47876 12.0335 7.99988C12.0335 8.521 11.9695 8.8864 11.8556 9.20993C11.7385 9.54233 11.5573 9.86395 11.2761 10.2967C11.0769 10.603 11.1577 11.017 11.4563 11.2212C11.755 11.4254 12.1586 11.3426 12.3577 11.0363C12.6542 10.5802 12.9064 10.1506 13.0782 9.66301C13.2531 9.16653 13.3335 8.64306 13.3335 7.99988C13.3335 7.35671 13.2531 6.83323 13.0782 6.33675C12.9064 5.84914 12.6542 5.4196 12.3577 4.96348Z"
                                                                        fill="white" />
                                                                </svg>
                                                                الإستماع للدرس
                                                            </a>
                                                            <a href="#" class="btn-outline clr-royal-blue" download>
                                                                <i class="fa-solid fa-download"></i>
                                                                تنزيل الدرس </a>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Row -->



                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading_2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse_2"
                                                aria-expanded="false" aria-controls="collapse_2">
                                                هل يمكنني الاشتراك من أي مكان في العالم ؟
                                                <span class="badge-span"> أطفال </span>
                                            </button>
                                        </h2>
                                        <div id="collapse_2" class="accordion-collapse collapse"
                                            aria-labelledby="heading_2" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">

                                                <div class="row align-items-center box-content-vid border-bottom p-3 g-0">
                                                    <div class="col-md-8">
                                                        <div class="d-flex align-items-center ">
                                                            <div class="icon ms-2">
                                                                <i class="fa-solid fa-video"></i>
                                                            </div>
                                                            <div class="text title">
                                                                <h4 class='h6 m-1'>الدرس الأول</h4>
                                                                <h5 class="h5 m-0">عنوان الدرس</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div
                                                            class="btns d-flex justify-content-md-end justify-content-center mt-2 mt-md-0">
                                                            <a href="#"
                                                                class="btn-green ms-2 text-white btn-show-vid"
                                                                data-vid-id='bTqVqk7FSmY' data-bs-toggle="modal"
                                                                data-bs-target="#vidInfoTeacher"> <i
                                                                    class="fa-regular fa-eye"></i> عرض الدرس </a>
                                                            <a href="#" class="btn-outline clr-royal-blue" download>
                                                                <i class="fa-solid fa-download"></i> تنزيل الدرس </a>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Row -->

                                                <div class="row align-items-center box-content-vid border-bottom p-3 g-0">
                                                    <div class="col-md-8">
                                                        <div class="d-flex align-items-center ">
                                                            <div class="icon ms-2">
                                                                <i class="fa-solid fa-file"></i>
                                                            </div>
                                                            <div class="text title">
                                                                <h4 class='h6 m-1'>الدرس الثاني</h4>
                                                                <h5 class="h5 m-0">عنوان الدرس</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div
                                                            class="btns d-flex justify-content-md-end justify-content-center mt-2 mt-md-0">
                                                            <a href="#"
                                                                class="btn-green ms-2 text-white btn-show-vid"
                                                                data-vid-id='files/pdf-test.pdf' data-type-content='pdf'
                                                                data-bs-toggle="modal" data-bs-target="#vidInfoTeacher">
                                                                <i class="fa-regular fa-eye"></i> عرض الدرس </a>
                                                            <a href="files/pdf-test.pdf"
                                                                class="btn-outline clr-royal-blue" download> <i
                                                                    class="fa-solid fa-download"></i> تنزيل الدرس </a>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Row -->

                                                <div class="row align-items-center box-content-vid border-bottom p-3 g-0">
                                                    <div class="col-md-8">
                                                        <div class="d-flex align-items-center ">
                                                            <div class="icon ms-2">
                                                                <i class="fa-solid fa-microphone"></i>
                                                            </div>
                                                            <div class="text title">
                                                                <h4 class='h6 m-1'>الدرس الثالث</h4>
                                                                <h5 class="h5 m-0">عنوان الدرس</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div
                                                            class="btns d-flex justify-content-md-end justify-content-center mt-2 mt-md-0">
                                                            <a href="#"
                                                                class="btn-green ms-2 text-white btn-play-audio"
                                                                data-url='https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3'>
                                                                <svg class='ms-1' width="14" height="16"
                                                                    viewBox="0 0 14 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M2.79801 11.2406C2.96903 11.2406 3.13591 11.2932 3.276 11.3913L9.02217 15.415C9.57447 15.8017 10.3335 15.4066 10.3335 14.7324V1.2674C10.3335 0.593155 9.57447 0.198042 9.02217 0.584782L3.276 4.60843C3.13591 4.70652 2.96903 4.75914 2.79801 4.75914H1.16683C0.706592 4.75914 0.333496 5.13224 0.333496 5.59248V10.4073C0.333496 10.8675 0.706592 11.2406 1.16683 11.2406H2.79801ZM2.79801 9.57396H2.00016V6.42581H2.79801C3.31108 6.42581 3.81172 6.26795 4.23199 5.97367L8.66683 2.86825V13.1315L4.23199 10.0261C3.81172 9.73182 3.31108 9.57396 2.79801 9.57396Z"
                                                                        fill="white" />
                                                                    <path
                                                                        d="M12.3577 4.96348C12.1586 4.65714 11.755 4.57435 11.4563 4.77858C11.1577 4.98282 11.0769 5.39672 11.2761 5.70307C11.5573 6.13581 11.7385 6.45743 11.8556 6.78984C11.9695 7.11337 12.0335 7.47876 12.0335 7.99988C12.0335 8.521 11.9695 8.8864 11.8556 9.20993C11.7385 9.54233 11.5573 9.86395 11.2761 10.2967C11.0769 10.603 11.1577 11.017 11.4563 11.2212C11.755 11.4254 12.1586 11.3426 12.3577 11.0363C12.6542 10.5802 12.9064 10.1506 13.0782 9.66301C13.2531 9.16653 13.3335 8.64306 13.3335 7.99988C13.3335 7.35671 13.2531 6.83323 13.0782 6.33675C12.9064 5.84914 12.6542 5.4196 12.3577 4.96348Z"
                                                                        fill="white" />
                                                                </svg>
                                                                الإستماع للدرس
                                                            </a>
                                                            <a href="#" class="btn-outline clr-royal-blue" download>
                                                                <i class="fa-solid fa-download"></i>
                                                                تنزيل الدرس </a>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Row -->



                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    </div> <!-- End Page -->

@endsection
