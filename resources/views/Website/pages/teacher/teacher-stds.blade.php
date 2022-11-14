@extends('Website.partials.layout')
@section('title', 'الطلاب')
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
                            <div class="row g-0">
                                <div class="col">
                                    <p class='gray-clr mb-2'>إسم الطالب</p>
                                </div>
                                <div class="col">
                                    <p class='gray-clr mb-2'>العمر</p>
                                </div>
                            </div>


                            <div class="bg-white rounded-lg border teacher-stds fs-14px">

                                @foreach ($students as $student)
                                    <div class="row p-3 border-bottom g-0">
                                        <div class="col"><a href="#" class='text-decoration-none gray-clr'>
                                                {{ $student->full_name }} </a></div>
                                        <div class="col"> <span class="font-number">{{ $student->age }}</span> </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div> <!-- End Page -->

@endsection
