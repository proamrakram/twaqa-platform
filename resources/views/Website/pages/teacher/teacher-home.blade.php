@extends('Website.partials.layout')
@section('title', __('Main - Teacher'))
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
                        <div class="profile-data-user-boxes content-user">
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <div
                                        class="box shadow-sm rounded-lg px-4 py-2 border bg-white d-flex align-items-center justify-content-between">
                                        <div class="title">
                                            <h4 class='clr-royal-blue mb-0'> الموعيد القادمة </h4>
                                            <span class='gray-clr'> هذا الأسبوع </span>
                                        </div>
                                        <div class="number font-number fw-bold fs-4">
                                            5
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div
                                        class="box shadow-sm rounded-lg px-4 py-2 border bg-white d-flex align-items-center justify-content-between">
                                        <div class="title">
                                            <h4 class='clr-royal-blue mb-0'> إجمالي الحصص </h4>
                                            <span class='gray-clr'> هذا الشهر </span>
                                        </div>
                                        <div class="number font-number fw-bold fs-4">
                                            5
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div
                                        class="box shadow-sm rounded-lg px-4 py-2 border bg-white d-flex align-items-center justify-content-between">
                                        <div class="title">
                                            <h4 class='clr-royal-blue mb-0'> الراتب </h4>
                                            <span class='gray-clr'> هذا الشهر </span>
                                        </div>
                                        <div class="number font-number fw-bold fs-4">
                                            700<sup class='fs-6'> ج.م </sup>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="box-next-metings">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h3> المواعيد القادمة هذا الأسبوع </h3>
                                    <a href="sign_up.php" class="btn-outline clr-royal-blue"> عرض الجميع <i
                                            class="fa-solid fa-angle-left"></i> </a>
                                </div>

                                <div class="box bg-white rounded-lg shadow-box border p-4 mb-3 d-flex">
                                    <a href="">
                                        <img src="assets/img/img-std.png" class="rounded-3 ms-2" width="40px"
                                            height="40px">
                                    </a>
                                    <div class="content">
                                        <span class="badge-span mx-1"> حصة حفظ ومراجعة </span>
                                        <h4 class='mb-1 mt-2 h5'> كورس القرآن الكريم </h4>
                                        <a href="#" class='text-decoration-none gray-clr'> محمد عبد السلام </a>
                                        <div class="time">
                                            يوم
                                            <strong class='px-1'>الثلاثاء</strong>
                                            <span class="font-number">20</span>
                                            أكتوبر
                                            <span class="font-number">2022</span>
                                            <span class="px-2"></span>

                                            <span dir='ltr'>
                                                <strong class='font-number'>1:30</strong>
                                                <span class="font-number">PM</span>
                                                -
                                                <strong class='font-number'>2:30</strong>
                                                <span class="font-number">PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </div> <!-- End Box -->

                                <div class="box bg-white rounded-lg shadow-box border p-4 mb-3 d-flex">
                                    <a href="">
                                        <img src="assets/img/img-std.png" class="rounded-3 ms-2" width="40px"
                                            height="40px">
                                    </a>
                                    <div class="content">
                                        <span class="badge-span mx-1"> حصة حفظ ومراجعة </span>
                                        <h4 class='mb-1 mt-2 h5'> كورس القرآن الكريم </h4>
                                        <a href="#" class='text-decoration-none gray-clr'> محمد عبد السلام </a>
                                        <div class="time">
                                            يوم
                                            <strong class='px-1'>الثلاثاء</strong>
                                            <span class="font-number">20</span>
                                            أكتوبر
                                            <span class="font-number">2022</span>
                                            <span class="px-2"></span>

                                            <span dir='ltr'>
                                                <strong class='font-number'>1:30</strong>
                                                <span class="font-number">PM</span>
                                                -
                                                <strong class='font-number'>2:30</strong>
                                                <span class="font-number">PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </div> <!-- End Box -->


                                <div class="box bg-white rounded-lg shadow-box border p-4 mb-3">
                                    <h5> عذراََ، لا يوجد أي مواعيد </h5>
                                    <p class='gray-clr mb-0'> قائمة مواعيدك القادمة فارغة، في حال وجود مواعيد سنقوم بعرضها
                                        هنا. </p>
                                </div> <!-- End Box -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page -->

@endsection
