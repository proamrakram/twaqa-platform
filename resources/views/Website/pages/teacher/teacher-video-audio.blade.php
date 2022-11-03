@extends('Website.partials.layout')
@section('content')
    @push('teacher-video-audio-style')
        <link href='assets/css/pekeUpload.css' />
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
                        <div class="profile-data-user-boxes content-user mt-5">
                            <ul class="list-unstyled p-0 d-flex flex-column col bg-white rounded"
                                data-text-success='تم الرفع بنجاح' id="files">
                                <!-- <li class="text-muted text-center empty">No files uploaded.</li> -->
                            </ul>
                            <div class="bg-white border rounded-3 mb-3">
                                <div
                                    class="d-flex align-items-center justify-content-between border-bottom p-4 uploade-file">
                                    <h5 class='mb-0'>فيديو تعريفي</h5>
                                    <div class="d-flex align-items-center">
                                        <select name="" id="" class='upload-media'>
                                            <option value="insert-url"> وضع رابط </option>
                                            <option value="upload-url"> رفع فيديو </option>
                                        </select>
                                        <div class="insert-url position-relative hide-box">
                                            <input type="text" placeholder='قم بوضع الرابط'>
                                        </div>
                                        <div id="" class="drag-and-drop-zone dm-uploader upload-url hide-box">
                                            <input type="file" title='Click to add Files' data-type='video' />
                                            <span
                                                class='text position-absolute top-50 start-0 translate-middle-y d-flex align-items-center'>
                                                <i class="fa-brands fa-youtube ms-1"></i>
                                                رفع فيديو
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="d-flex align-items-center justify-content-between border-bottom p-4 uploade-file">
                                    <h5 class='mb-0'> ملف صوتي </h5>
                                    <div class="d-flex align-items-center">
                                        <select name="" id="" class='upload-media'>
                                            <option value="insert-url"> وضع رابط </option>
                                            <option value="upload-url"> رفع ملف صوتي </option>
                                        </select>
                                        <div class="insert-url position-relative hide-box">
                                            <input type="text" placeholder='قم بوضع الرابط'>
                                        </div>
                                        <div id="" class="drag-and-drop-zone dm-uploader upload-url hide-box">
                                            <input type="file" title='Click to add Files' data-type='audio' />
                                            <span
                                                class='text position-absolute top-50 start-0 translate-middle-y d-flex align-items-center'>
                                                <i class="fa-solid fa-microphone ms-1"></i>
                                                رفع ملف صوتي
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page -->


    @push('teacher-video-audio-script')
        <script src='assets/js/pekeUpload.min.js'></script>

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
