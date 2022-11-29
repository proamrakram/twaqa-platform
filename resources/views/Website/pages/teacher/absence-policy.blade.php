@extends('Website.partials.layout')
@section('title', $title)

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

                            <div class="bg-white p-4  rounded-lg border">
                                <h3 class="h4 mb-3"> سياسة الغياب </h3>

                                {!! $description !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page -->

@endsection
