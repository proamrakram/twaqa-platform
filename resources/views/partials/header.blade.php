
        <!DOCTYPE html>
<html @if (App::getLocale()=='ar') 	direction="rtl" dir="rtl" style="direction: rtl" @endif>
	<!--begin::Head-->
	<head>
        <base href="">
		<title> @yield('title')    </title>
		<meta charset="utf-8" />
 		<meta name="viewport" content="width=device-width, initial-scale=1" />
 		<link rel="shortcut icon" href="{{asset('assets/media/favicon.png')}}" />
 		<!--begin::Page Vendor Stylesheets(used by this page)-->


		<link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!-- <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" /> -->

    <link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />=
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		@if (App::getLocale()=='en' || App::getLocale()=='sp')
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	@endif
		@if (App::getLocale()=='ar')
    <link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/rtl.css')}}" rel="stylesheet" type="text/css" />

		<link href="{{asset('assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    @endif

    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}"/>
		<link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css" />
    @yield('style')
	</head>
	<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
       <div class="d-flex flex-column flex-root">
            <div class="page d-flex flex-row flex-column-fluid">

@include('partials.sidebar')
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

