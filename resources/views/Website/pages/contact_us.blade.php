@extends('Website.partials.layout')
@section('content')
    <div class="page page-data mb-5">

        <header class="header-page">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-3 mb-0">
                        <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                        <li class="breadcrumb-item" aria-current="page"> <a href="#"> من نحن </a> </li>
                        <li class="breadcrumb-item active" aria-current="page"> اتصل بنا </li>
                    </ol>
                </nav>
                <div class="heading-page shadow-box  bg-white rounded-lg mb-4 p-4"
                    style='background-image: url({{ asset('website/assets/img/img5.png') }});background-position: top center;background-size: 100%;'>
                    <h1 class="h1 text-white text-center fw-bold  mb-0 pt-md-5 pt-3 mt-md-3"> اتصل بنا </h1>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <div class="profile-data page-contact">
            <div class="container">
                <div class="bg-white rounded-lg border shadow-sm box-contact">
                    <div class="row g-0">
                        <div class="col-md-6 border-start">
                            <div class=" p-5 pb-md-4 pb-0">
                                <div class="box mb-3">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone fs-4 ms-2 clr-baby-blue"></i>
                                        <span class='fs-5 gray-clr'> رقم الهاتف </span>
                                    </div>
                                    <span class="font-number fs-3">05988555678</span>
                                </div>
                                <div class="box mb-3">
                                    <div class="icon">
                                        <i class="fa-solid fa-globe fs-4 ms-2 clr-baby-blue"></i>
                                        <span class='fs-5 gray-clr'> البريد الإلكتروني </span>
                                    </div>
                                    <span class="font-number fs-3">twaqa@gmail.com</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" p-5">
                                <form action="">
                                    <input type="text" placeholder='الاسم الكريم'>
                                    <input type="text" placeholder='بريد الإلكتروني * '>
                                    <input type="text" placeholder='رقم الهاتف *'>
                                    <textarea placeholder='الاستفسار الخاص بك'></textarea>

                                    <div class="mt-5"><button
                                            class='btn-green d-block w-100 text-white p-3'>إرسال</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div> <!-- End Page -->
@endsection
