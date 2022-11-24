@extends('Website.partials.layout')
@section('title', 'الانجازات')
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

                            <div class="box-about-teacher box-achievements">

                                <div class="d-flex border-bottom pb-3 mb-2 bg-white  p-4 border rounded-3">
                                    <div class="icon ms-3">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="h5 clr-royal-blue mb-2   "> كورس القران الكريم </h4>
                                        <p class="mb-0"> حفظ سورة الفاتحة </p>
                                        <p class="fw-bold gray-clr font-number"> Thu Oct 20 2022 01:51:23 </p>
                                    </div>
                                </div> <!-- End Box -->

                                <div class="d-flex border-bottom pb-3 mb-2 bg-white  p-4 border rounded-3">
                                    <div class="icon ms-3">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="h5 clr-royal-blue mb-2   "> كورس القران الكريم </h4>
                                        <p class="mb-0"> حفظ جزء <span
                                                class="font-number clr-baby-blue fw-bold">{2}</span> </p>
                                        <p class="fw-bold gray-clr font-number"> Thu Oct 20 2022 01:51:23 </p>
                                    </div>
                                </div> <!-- End Box -->


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div> <!-- End Page -->

@endsection
