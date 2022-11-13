@extends('Website.partials.layout')
@section('content')
    @push('teacher-video-audio-style')
        <link href='{{ asset('website/assets/css/pekeUpload.css') }}' />
        @livewireStyles()
    @endpush

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

                        @livewire('teacher-video-audio')

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page -->


    @push('teacher-video-audio-script')
        @livewireScripts()
        <script src='{{ asset('website/assets/js/pekeUpload.min.js') }} '></script>

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
