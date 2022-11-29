@extends('Website.partials.layout')
@section('title', __('Vedios'))

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
                            <div class="bg-white rounded-lg border">

                                <div class="row border-bottom p-4 g-0">
                                    <div class="col-md-5">
                                        <div class="playerTwaqa" data-plyr-provider="youtube"
                                            data-plyr-embed-id="bTqVqk7FSmY"></div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="pe-md-3 text-center text-md-end mt-3 mt-md-0">
                                            <h3 class="h4 mb-3"> عنوان الفيديو </h3>
                                            <p>
                                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                                مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                                إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                            </p>
                                            <div class="d-flex justify-content-md-end  justify-content-center mt-3">
                                                <a href="#" target="_blank" class="btn-outline clr-royal-blue"> <i
                                                        class="fa-brands fa-youtube"></i> مشاهدة على يوتيوب </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row border-bottom p-4  g-0">
                                    <div class="col-md-5">
                                        <div class="playerTwaqa" data-plyr-provider="youtube"
                                            data-plyr-embed-id="bTqVqk7FSmY"></div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="pe-md-3 text-center text-md-end mt-3 mt-md-0">
                                            <h3 class="h4 mb-3"> عنوان الفيديو </h3>
                                            <p>
                                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                                مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                                إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                            </p>
                                            <div class="d-flex justify-content-md-end  justify-content-center mt-3">
                                                <a href="#" target="_blank" class="btn-outline clr-royal-blue"> <i
                                                        class="fa-brands fa-youtube"></i> مشاهدة على يوتيوب </a>
                                            </div>
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

@endsection
