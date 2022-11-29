@extends('Website.partials.layout')
@section('title', __('My Testimonials'))
@section('content')

    <div class="page page-data page-std mb-5">

        @include('Website.partials.header-heading-page')

        <div class="profile-data">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="profile-aside">
                            @include('Website.partials.std-side')
                        </aside>
                    </div>

                    <div class="col-md-9">
                        <div class="profile-data-user-boxes content-user books">
                            <div class="bg-white rounded-lg">
                                <div class="book p-3 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="img">
                                                <img src="{{ asset('website/assets/img/img_certificates.png') }}"
                                                    alt="" class='rounded-lg'>
                                            </div>
                                        </div>

                                        <div class="col-md-8 text-md-end text-center">
                                            <span class="badge-span mt-md-0 mt-3 d-inline-block"> شهادة تقدير </span>
                                            <h3 class="h4 mb-3 mt-2">عنوان الشهادة</h3>
                                            <p class='gray-clr mb-4'>
                                                وصف الشهادة
                                            </p>
                                            <div
                                                class="info-book d-flex justify-content-md-start justify-content-center align-items-center">
                                                <i class='fa-regular fa-calendar ms-2 clr-gray'></i>
                                                تاريخ الحصول على الشهادة
                                            </div>
                                            <div
                                                class="btns d-flex justify-content-md-end justify-content-center mt-md-0 mt-3">
                                                <a href="#" class="btn-green ms-2 text-white btn-show-vid"
                                                    data-vid-id="bTqVqk7FSmY" data-bs-toggle="modal"
                                                    data-bs-target="#vidInfoTeacher"> <i class="fa-regular fa-eye"></i> عرض
                                                    الشهادة </a>
                                                <a href="#" class="btn-outline clr-royal-blue" download=""> <i
                                                        class="fa-solid fa-download"></i> تنزيل الشهادة </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End certificates-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page -->

@endsection
