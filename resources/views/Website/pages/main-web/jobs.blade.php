@extends('Website.partials.layout')
@section('content')
    <div class="page page-data mb-5">

        <header class="header-page">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-3 mb-0">
                        <li class="breadcrumb-item"><a href="#"> الملف الشخصي </a></li>
                        <li class="breadcrumb-item active" aria-current="page"> إسم المعلم </li>
                    </ol>
                </nav>
                <div class="heading-page shadow-box  bg-white rounded-lg mb-4 p-4"
                    style='background-image: url({{ asset('website/assets/img/bg_img_teach.png') }})'>
                    <h1 class="h1 clr-royal-blue text-center fw-bold  mb-0 pt-md-5 pt-3 mt-md-3"> الوظائف </h1>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <div class="profile-data">
            <div class="container">

                <div class="accordion accordion-job" id="accordionExample">
                    <div class="accordion-item  ">
                        <h2 class="accordion-header" id="heading_2">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('website/assets/img/Logo.svg') }}" alt="">
                                    <h3 class='mb-0 text-dark me-2 h5'> عنوان الوظيفة </h3>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse_1" class="accordion-collapse collapse show" aria-labelledby="heading_2"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="date">
                                    <i class="fa-regular fa-clock ms-2"></i>
                                    4 يوليو 2022
                                </div>
                                <div class="details mt-4 mb-3">
                                    <h5 class='fw-bold h6'>تفاصيل الوظيفية</h5>
                                    <p>
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                        النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى
                                        زيادة عدد الحروف التى يولدها التطبيق.
                                    </p>
                                    <p>
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                        النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى
                                        زيادة عدد الحروف التى يولدها التطبيق.
                                    </p>
                                </div>
                                <div class="last-applyed mb-3">
                                    <h5 class='fw-bold h6'>اخر موعد للتقديم على الوظيفة</h5>
                                    <span class="font-number"> 22/1/2022 </span>
                                </div>
                                <div class="method-applyed">
                                    <h5 class='fw-bold h6'>طريقة التقديم</h5>
                                    <span class=""> إرسال السيرة الذاتية عبر البريد الإلكتروني twaqah@gmail.com
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_2" aria-expanded="false" aria-controls="collapse_2">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('website/assets/img/Logo.svg') }}" alt="">
                                    <h3 class='mb-0 text-dark me-2 h5'> عنوان الوظيفة </h3>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse_2" class="accordion-collapse collapse" aria-labelledby="heading_2"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="date">
                                    <i class="fa-regular fa-clock ms-2"></i>
                                    4 يوليو 2022
                                </div>

                                <div class="details mt-4 mb-3">

                                    <h5 class='fw-bold h6'>تفاصيل الوظيفية</h5>

                                    <p>
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                        النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى
                                        زيادة عدد الحروف التى يولدها التطبيق.
                                    </p>

                                    <p>
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                        النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى
                                        زيادة عدد الحروف التى يولدها التطبيق.
                                    </p>

                                </div>

                                <div class="last-applyed mb-3">
                                    <h5 class='fw-bold h6'>اخر موعد للتقديم على الوظيفة</h5>
                                    <span class="font-number"> 22/1/2022 </span>
                                </div>

                                <div class="method-applyed">
                                    <h5 class='fw-bold h6'>طريقة التقديم</h5>
                                    <span class=""> إرسال السيرة الذاتية عبر البريد الإلكتروني twaqah@gmail.com
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page -->
@endsection
