@extends('Website.partials.layout')
@section('title', __('Vid_Watch'))
@section('content')
    <div class="page page-data mb-5">

        <header class="header-page">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-3 mb-0">
                        <li class="breadcrumb-item"><a href="#"> {{ __('Profile Personly') }} </a></li>
                        <li class="breadcrumb-item active" aria-current="page"> إسم المعلم </li>
                    </ol>
                </nav>
                <div class="heading-page shadow-box  bg-white rounded-lg mb-4 p-4"
                    style='background-image: url({{ asset('website/assets/img/img12.png') }});background-size: cover;background-position: right center;'>
                    <h1 class="h1 clr-royal-blue text-center fw-bold  mb-0 pt-md-5 pt-3 mt-md-3"> {{ __('Vid_Watch') }}
                    </h1>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <div class="profile-data page-videos">
            <div class="container">

                <div class="owl-carousel">
                    <div class="item">
                        <div class="box-video box-content-vid">
                            <div class="content position-relative">
                                <img src="{{ asset('website/assets/img/img_slider.png') }}" alt="">
                                <div class="txt position-absolute top-50 start-50 translate-middle text-white text-center">
                                    <i class="fa-regular fa-circle-play fs-1 mb-3 play-vid btn-show-vid"
                                        data-vid-id='bTqVqk7FSmY' data-bs-toggle="modal"
                                        data-bs-target="#vidInfoTeacher"></i>
                                    <h4 class="title"> عنوان الفيديو 1 </h4>
                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                        النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى
                                        زيادة عدد الحروف التى يولدها التطبيق.</p>
                                </div>
                                <div class="content-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                            </div>
                            <div class="vid">
                                <div class="playerTwaqa" data-plyr-provider="youtube" data-plyr-embed-id=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="box-video box-content-vid">
                            <div class="content position-relative">
                                <img src="{{ asset('website/assets/img/img_slider.png') }}" alt="">
                                <div class="txt position-absolute top-50 start-50 translate-middle text-white text-center">
                                    <i class="fa-regular fa-circle-play fs-1 mb-3 play-vid btn-show-vid"
                                        data-vid-id='bTqVqk7FSmY' data-bs-toggle="modal"
                                        data-bs-target="#vidInfoTeacher"></i>
                                    <h4 class="title"> عنوان الفيديو 2 </h4>
                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                        النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى
                                        زيادة عدد الحروف التى يولدها التطبيق.</p>
                                </div>
                                <div class="content-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                            </div>
                            <div class="vid">
                                <div class="playerTwaqaVid" data-plyr-provider="youtube" data-plyr-embed-id=""></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Modal Video vidInfoTeacher -->
        <div class="modal fade" id="vidInfoTeacher" tabindex="-1" aria-labelledby="vidInfoTeacherLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="vidInfoTeacherLabel"> </h1>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="content"></div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- End Page -->
@endsection
