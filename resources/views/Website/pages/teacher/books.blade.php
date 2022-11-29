@extends('Website.partials.layout')
@section('title', __('Books'))
@section('content')

    <div class="page page-data mb-5">

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
                        <div class="profile-data-user-boxes content-user books">
                            <div class="bg-white rounded-lg">

                                <div class="book p-3 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <div class="img"><img src="assets/img/book.png" alt=""
                                                    class='rounded-lg'></div>
                                        </div>
                                        <div class="col-md-9 text-md-end text-center">
                                            <h3 class="h4 mb-3 mt-md-0 mt-3">صحيح البخاري</h3>
                                            <p class='gray-clr mb-4'>
                                                كتاب - الجامع المسند الصحيح المختصر من أُمور رسول الله صلى الله عليه وسلّم
                                                وسننه وأيامه - الشهير باسم - صحيح البخاري - صنفه الإمام محمد بن إسماعيل
                                                البخاري, هو أبرز كتب الحديث النبوي عند المسلمين من أهل السنة والجماعة.
                                            </p>
                                            <div class="info-book d-flex justify-content-md-start justify-content-center">
                                                <div class="views">
                                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.6001 3C19.2275 3 22.6001 7 24.6001 12L24.3764 12.5413C22.3505 17.2856 18.9865 21 12.6001 21C5.97268 21 2.6001 17 0.600098 12C2.6001 7 5.97268 3 12.6001 3ZM12.6001 5C7.89438 5 4.93077 7.24669 2.87447 11.7641L2.7691 12L2.87447 12.2359C4.88295 16.6483 7.75703 18.8943 12.2746 18.9964L12.6001 19C17.3058 19 20.2694 16.7533 22.3257 12.2359L22.4301 12L22.3257 11.7641C20.3172 7.35174 17.4432 5.10572 12.9256 5.00365L12.6001 5ZM12.6001 7C15.3615 7 17.6001 9.23858 17.6001 12C17.6001 14.7614 15.3615 17 12.6001 17C9.83867 17 7.6001 14.7614 7.6001 12C7.6001 9.23858 9.83867 7 12.6001 7ZM12.6001 9C10.9432 9 9.6001 10.3431 9.6001 12C9.6001 13.6569 10.9432 15 12.6001 15C14.257 15 15.6001 13.6569 15.6001 12C15.6001 10.3431 14.257 9 12.6001 9Z"
                                                            fill="#4A4A4A" />
                                                    </svg>
                                                    <span class="clr-royal-blue mx-1 font-number fw-bold">1000 </span>
                                                    <span class='gray-clr'>مشاهدة</span>
                                                </div>
                                                <div class="downloader me-3">
                                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.6001 19C19.1524 19 19.6001 19.4477 19.6001 20C19.6001 20.5523 19.1524 21 18.6001 21H6.6001C6.04781 21 5.6001 20.5523 5.6001 20C5.6001 19.4477 6.04781 19 6.6001 19H18.6001ZM12.6001 5C13.1524 5 13.6001 5.44772 13.6001 6V12H14.6078C15.0812 12 15.4649 12.3838 15.4649 12.8571C15.4649 13.0089 15.4246 13.1579 15.3482 13.289L13.3405 16.7308C13.102 17.1397 12.5771 17.2778 12.1682 17.0393C12.0405 16.9648 11.9342 16.8585 11.8597 16.7308L9.85203 13.289C9.61351 12.8801 9.75162 12.3553 10.1605 12.1168C10.2916 12.0403 10.4407 12 10.5924 12H11.6001V6C11.6001 5.44772 12.0478 5 12.6001 5Z"
                                                            fill="#4A4A4A" />
                                                    </svg>
                                                    <span class="clr-royal-blue  font-number fw-bold">1000 </span>
                                                    <span class='gray-clr'>تحميل </span>
                                                </div>
                                            </div>
                                            <div
                                                class="btns d-flex justify-content-md-end justify-content-center mt-md-0 mt-3">
                                                <a href="#" class="btn-green ms-2 text-white btn-show-vid"
                                                    data-vid-id="bTqVqk7FSmY" data-bs-toggle="modal"
                                                    data-bs-target="#vidInfoTeacher"> <i class="fa-regular fa-eye"></i> عرض
                                                    الدرس </a>
                                                <a href="#" class="btn-outline clr-royal-blue" download=""> <i
                                                        class="fa-solid fa-download"></i> تنزيل الكتاب </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End Book-->

                                <div class="book p-3 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <div class="img"><img src="assets/img/book.png" alt=""
                                                    class='rounded-lg'></div>
                                        </div>
                                        <div class="col-md-9 text-md-end text-center">
                                            <h3 class="h4 mb-3 mt-md-0 mt-3">صحيح البخاري</h3>
                                            <p class='gray-clr mb-4'>
                                                كتاب - الجامع المسند الصحيح المختصر من أُمور رسول الله صلى الله عليه وسلّم
                                                وسننه وأيامه - الشهير باسم - صحيح البخاري - صنفه الإمام محمد بن إسماعيل
                                                البخاري, هو أبرز كتب الحديث النبوي عند المسلمين من أهل السنة والجماعة.
                                            </p>
                                            <div class="info-book d-flex justify-content-md-start justify-content-center">
                                                <div class="views">
                                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.6001 3C19.2275 3 22.6001 7 24.6001 12L24.3764 12.5413C22.3505 17.2856 18.9865 21 12.6001 21C5.97268 21 2.6001 17 0.600098 12C2.6001 7 5.97268 3 12.6001 3ZM12.6001 5C7.89438 5 4.93077 7.24669 2.87447 11.7641L2.7691 12L2.87447 12.2359C4.88295 16.6483 7.75703 18.8943 12.2746 18.9964L12.6001 19C17.3058 19 20.2694 16.7533 22.3257 12.2359L22.4301 12L22.3257 11.7641C20.3172 7.35174 17.4432 5.10572 12.9256 5.00365L12.6001 5ZM12.6001 7C15.3615 7 17.6001 9.23858 17.6001 12C17.6001 14.7614 15.3615 17 12.6001 17C9.83867 17 7.6001 14.7614 7.6001 12C7.6001 9.23858 9.83867 7 12.6001 7ZM12.6001 9C10.9432 9 9.6001 10.3431 9.6001 12C9.6001 13.6569 10.9432 15 12.6001 15C14.257 15 15.6001 13.6569 15.6001 12C15.6001 10.3431 14.257 9 12.6001 9Z"
                                                            fill="#4A4A4A" />
                                                    </svg>
                                                    <span class="clr-royal-blue mx-1 font-number fw-bold">1000 </span>
                                                    <span class='gray-clr'>مشاهدة</span>
                                                </div>
                                                <div class="downloader me-3">
                                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.6001 19C19.1524 19 19.6001 19.4477 19.6001 20C19.6001 20.5523 19.1524 21 18.6001 21H6.6001C6.04781 21 5.6001 20.5523 5.6001 20C5.6001 19.4477 6.04781 19 6.6001 19H18.6001ZM12.6001 5C13.1524 5 13.6001 5.44772 13.6001 6V12H14.6078C15.0812 12 15.4649 12.3838 15.4649 12.8571C15.4649 13.0089 15.4246 13.1579 15.3482 13.289L13.3405 16.7308C13.102 17.1397 12.5771 17.2778 12.1682 17.0393C12.0405 16.9648 11.9342 16.8585 11.8597 16.7308L9.85203 13.289C9.61351 12.8801 9.75162 12.3553 10.1605 12.1168C10.2916 12.0403 10.4407 12 10.5924 12H11.6001V6C11.6001 5.44772 12.0478 5 12.6001 5Z"
                                                            fill="#4A4A4A" />
                                                    </svg>
                                                    <span class="clr-royal-blue  font-number fw-bold">1000 </span>
                                                    <span class='gray-clr'>تحميل </span>
                                                </div>
                                            </div>
                                            <div
                                                class="btns d-flex justify-content-md-end justify-content-center mt-md-0 mt-3">
                                                <a href="#" class="btn-green ms-2 text-white btn-show-vid"
                                                    data-vid-id="bTqVqk7FSmY" data-bs-toggle="modal"
                                                    data-bs-target="#vidInfoTeacher"> <i class="fa-regular fa-eye"></i> عرض
                                                    الدرس </a>
                                                <a href="#" class="btn-outline clr-royal-blue" download=""> <i
                                                        class="fa-solid fa-download"></i> تنزيل الكتاب </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End Book-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page -->
@endsection
