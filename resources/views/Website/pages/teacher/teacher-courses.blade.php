@extends('Website.partials.layout')
@section('title', 'الكورسات')

@push('teacher-courses-styles')
    <link href='{{ asset('website/assets/css/pekeUpload.css') }}' />
@endpush

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
                        <div class="profile-data-user ">
                            @include('Website.partials.data-user')
                        </div>
                        <div class="profile-data-user-boxes content-user mt-5">



                            @foreach ($courses as $course)
                                <div class="bg-white rounded-lg border course mb-3">
                                    <div class="heading px-4 py-3 border-bottom">
                                        <div class="d-flex  align-items-center justify-content-between mb-2">
                                            <h3 class='mb-0 h4'>{{ $course->name }}</h3>
                                            <span class='badge-span'>حالة الكورس</span>
                                        </div>
                                        <span class='badge-span'>{{ $course->hours }} ساعات</span>
                                        <span class='badge-span mx-1'>مجموعة</span>
                                        <span class='badge-span'>{{ $course->department }}</span>
                                    </div>
                                    <div class="stds px-4 py-3 border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class='gray-clr fw-bold d-block mb-2'>الطلاب</span>
                                                <div class="imgs d-flex">
                                                    @foreach (getStudents($course) as $student)
                                                        <a href="#"> <img src="{{ $student->img }}" alt="">
                                                        </a>
                                                    @endforeach

                                                </div>
                                            </div>
                                            <div class="col-6 text-center">
                                                <a href="#" class="btn-outline clr-royal-blue btn-lg"> <i
                                                        class="fa-regular fa-plus"></i> عرض بيانات الطلاب </a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="managment px-4 py-3 border-bottom">
                                        <span class='gray-clr fw-bold d-block mb-2'>المُشرف</span>
                                        <div class="imgs d-flex align-items-center">
                                            <a href="#"> <img src="{{ $course->supervisor->img }}" class='rounded-3 ms-2'
                                                    width='40px' height='40px'> </a>
                                            <a href="#" class='clr-royal-blue text-decoration-none'>
                                                {{ $course->supervisor->full_name }}</a>
                                        </div>
                                    </div>


                                    <div class="stds px-4 py-3">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p class='gray-clr mb-0'>لم تقم بإنشاء جدول الحصص, لإضافة جدول الحصص لهذا
                                                    الكورس, قم بالضغط على الزر في أقصى اليسار</p>
                                            </div>
                                            <div class="col-md-3 text-center mt-md-0 mt-2">
                                                <a href="#" class="btn-green text-white btn-lg fs-14px"> <i
                                                        class="fa-regular fa-plus"></i> إنشاء جدول الحصص </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page -->

    @push('teacher-courses-scripts')
        <script src='{{ asset('website/assets/js/pekeUpload.min.js') }}'></script>

        <!-- File item template -->
        <script type="text/html" id="files-template">
            <li class="media p-3">
                <div class="media-body mb-1">
                    <div class="mb-2 d-flex justify-content-center">
                        الحالة:
                        <span class="text-muted"> يتم الرفع </span>
                        <div class='mx-2'>-</div>
                        <strong class='font-number mx-2'>%%filename%%</strong>
                        <div class='mx-2'>-</div>
                        <b class='font-number'> %%type%% </b>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                            role="progressbar"
                            style="width: 0%"
                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </li>
        </script>

        <!-- Debug item template -->
        <script type="text/html" id="debug-template">
            <li class="list-group-item text-%%color%%"><strong>%%date%%</strong>: %%message%%</li>
        </script>
    @endpush

@endsection
