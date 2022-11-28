@extends('Website.partials.layout')
@section('title', 'الرئيسية - الطالب')
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
                        <div class="profile-data-user-boxes content-user">
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <div
                                        class="box shadow-sm rounded-lg px-4 py-2 border bg-white d-flex align-items-center justify-content-between">
                                        <div class="title">
                                            <h4 class='clr-baby-blue mb-0'> المواعيد القادمة </h4>
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
                                            <h4 class='clr-baby-blue mb-0'> إجمالي الحصص </h4>
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
                                            <h4 class='clr-baby-blue mb-0'> الرصيد المتبقى </h4>
                                            <span class='gray-clr'> هذا الشهر </span>
                                        </div>
                                        <div class="number font-number fw-bold fs-4">
                                            700<sup class='fs-6'> ج.م </sup>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="box-next-metings mb-5 box-about-teacher box-achievements">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h3> أخر الإنجازات </h3>
                                    <a href="std-achievements.php" class="btn-outline clr-royal-blue"> عرض الجميع <i
                                            class="fa-solid fa-angle-left"></i> </a>
                                </div>

                                <div class="d-flex border-bottom pb-3 mb-2 bg-white  p-4 border rounded-3">
                                    <div class="icon ms-3">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="h5 clr-royal-blue mb-2   "> كورس القران الكريم </h4>
                                        <p class="mb-0"> حفظ سورة الفاتحة </p>
                                        <p class="fw-bold gray-clr font-number"> Thu Oct 20 2022 01:51:23 </p>
                                    </div>
                                </div>
                                <!-- End Box -->

                                <div class="d-flex border-bottom pb-3 mb-2 bg-white  p-4 border rounded-3">
                                    <div class="icon ms-3">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="h5 clr-royal-blue mb-2   "> كورس القران الكريم </h4>
                                        <p class="mb-0"> حفظ سورة الفاتحة </p>
                                        <p class="fw-bold gray-clr font-number"> Thu Oct 20 2022 01:51:23 </p>
                                    </div>
                                </div>
                                <!-- End Box -->


                                <div class="box bg-white rounded-lg shadow-box border p-4 mb-3">
                                    <h5> عذراََ، لم تقم بإي انجازات </h5>
                                    <p class='gray-clr mb-0'>
                                        قائمة إنجازاتك فارغة، في حالة إنجازك لشىء معين سنقوم بعرضه هنا.
                                    </p>
                                </div> <!-- End Box -->




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
