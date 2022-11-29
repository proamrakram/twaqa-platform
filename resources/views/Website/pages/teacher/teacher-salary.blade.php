@extends('Website.partials.layout')
@section('title', __('Salary'))
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

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="box">
                                            <label for=""> من </label>
                                            <div class="input-icon position-relative">
                                                <i
                                                    class="fa-regular fa-calendar position-absolute top-50 start-0 translate-middle ms-3"></i>
                                                <input type="text" data-toggle="datepicker"
                                                    class='input bg-white rounded p-3 border font-number'
                                                    placeholder='اختر التاريخ'>
                                            </div>
                                        </div>
                                        <div class="box me-3">
                                            <label for=""> إلى </label>
                                            <div class="input-icon position-relative">
                                                <i
                                                    class="fa-regular fa-calendar position-absolute top-50 start-0 translate-middle ms-3"></i>
                                                <input type="text" data-toggle="datepicker"
                                                    class='input bg-white rounded p-3 border font-number'
                                                    placeholder='اختر التاريخ'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-md-start text-center">
                                    <a href="#" class="btn-green  d-inline-block text-white mt-md-0 mt-2"> عرض إستمارة
                                        الراتب </a>
                                </div>
                            </div>


                            <div class="table-responsive mt-3">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th> التاريخ </th>
                                            <th> الطالب </th>
                                            <th> المادة </th>
                                            <th> الحصة </th>
                                            <th> مدة الحصة </th>
                                            <th> سعر الساعة / للحصة </th>
                                            <th> المجموع </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class='bg-white'>
                                            <td> <span class="font-number">Thu Oct 09 2020</span> </td>
                                            <td> محمد سليمان عمران </td>
                                            <td> القرأن الكريم </td>
                                            <td> حفظ ومراجعة </td>
                                            <td> <span class="font-number">60</span> دقيقة </td>
                                            <td> <span class="font-number">20</span> ج.م </td>
                                            <td> <span class="font-number">20</span> ج.م </td>
                                        </tr>

                                        <tr class='bg-white'>
                                            <td> <span class="font-number">Thu Oct 09 2020</span> </td>
                                            <td> محمد سليمان عمران </td>
                                            <td> القرأن الكريم </td>
                                            <td> حفظ ومراجعة </td>
                                            <td> <span class="font-number">60</span> دقيقة </td>
                                            <td> <span class="font-number">20</span> ج.م </td>
                                            <td> <span class="font-number">20</span> ج.م </td>
                                        </tr>

                                        <tr class='bg-white'>
                                            <td> <span class="font-number">Thu Oct 09 2020</span> </td>
                                            <td> محمد سليمان عمران </td>
                                            <td> القرأن الكريم </td>
                                            <td> حفظ ومراجعة </td>
                                            <td> <span class="font-number">60</span> دقيقة </td>
                                            <td> <span class="font-number">20</span> ج.م </td>
                                            <td> <span class="font-number">20</span> ج.م </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex bg-white rounded p-3 justify-content-between align-items-center">
                                <div class="total">
                                    <h5 class='mb-0'>الإجمالي</h5>
                                </div>
                                <div class="currency text-start">
                                    <span class='d-block font-number green-clr h5 mb-0 fw-bold'>86.00</span>
                                    <span class='d-block'>جُنيهاً مصرياً لا غير</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page -->

@endsection
