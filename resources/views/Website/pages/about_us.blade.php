@extends('Website.partials.layout')
@section('title', $title)
@section('content')

    <div class="page page-data mb-5">

        <header class="header-page">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-3 mb-0">
                        <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                        <li class="breadcrumb-item active" aria-current="page"> من نحن </li>
                    </ol>
                </nav>
                <div class="heading-page shadow-box  bg-white rounded-lg mb-4 p-4"
                    style='background-image: url(assets/img/img8.png);background-position: center right;background-size: cover;'>
                    <h1 class="h1 clr-royal-blue text-center fw-bold  mb-0 pt-md-5 pt-3 mt-md-3"> من نحن </h1>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <div class="profile-data page-videos">
            <div class="container">
                <div class="bg-white p-4 rounded-lg border">
                    {{$description}}
                </div>
            </div>
        </div>
    </div> <!-- End Page -->


@endsection
