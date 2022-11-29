@extends('Website.partials.layout')
@section('title', __('Vedios'))
@section('content')
    <div class="page page-data page-std mb-5">
        @include('Website.partials.header-heading-page')
        <div class="profile-data">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="profile-aside">
                            @include('Website.partials.std-side')
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="profile-data-user-boxes content-user">
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <div class="box">
                                        <label for=""> حدد الكورس </label>
                                        <div class="input-icon position-relative">
                                            <select name="" id="" class="custom-select bg-white p-2 px-4">
                                                <option value=""> حدد الكورس </option>
                                                <option value=""> القران الكريم </option>
                                                <option value=""> القران الكريم </option>
                                                <option value=""> القران الكريم </option>
                                                <option value=""> القران الكريم </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-lg border">
                                <div class="row border-bottom p-4 g-0">
                                    <div class="col-md-5">
                                        <div class="playerTwaqa" data-plyr-provider="youtube"
                                            data-plyr-embed-id="bTqVqk7FSmY"></div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="pe-md-3 text-center text-md-end mt-3 mt-md-0">
                                            <h3 class="h4 mb-3"> عنوان الحصة </h3>
                                            <p>
                                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                                مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                                إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                            </p>
                                            <div class="d-flex justify-content-md-end  justify-content-center mt-3">
                                                <a href="#" target="_blank" class="btn-outline clr-royal-blue">
                                                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.2499 0.166992C12.8607 0.166992 14.1666 1.47283 14.1666 3.08366V3.08366L17.0957 2.35138C17.9887 2.12813 18.8936 2.67107 19.1168 3.56406C19.1499 3.69626 19.1666 3.83202 19.1666 3.96829V8.03237C19.1666 8.95284 18.4204 9.69903 17.4999 9.69903C17.3636 9.69903 17.2279 9.68232 17.0957 9.64927L14.1666 8.91699V8.91699C14.1666 10.5836 12.8156 11.9346 11.149 11.9346H4.83325C2.62411 11.9346 0.833252 10.1437 0.833252 7.93457V4.16699C0.833252 1.95785 2.62411 0.166992 4.83325 0.166992H11.2499ZM12.4999 2.66699H2.49992V9.33366H12.4999V2.66699ZM17.4999 3.96829L14.1666 4.80162V7.19903L17.4999 8.03237V3.96829Z"
                                                            fill="#4A4A4A" />
                                                        <path d="M12.4999 2.66699H2.49992V9.33366H12.4999V2.66699Z"
                                                            fill="#4A4A4A" />
                                                    </svg>
                                                    مشاهدة التسجيل
                                                </a>
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
                                            <h3 class="h4 mb-3"> عنوان الحصة </h3>
                                            <p>
                                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                                مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                                إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                            </p>
                                            <div class="d-flex justify-content-md-end  justify-content-center mt-3">
                                                <a href="#" target="_blank" class="btn-outline clr-royal-blue">
                                                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.2499 0.166992C12.8607 0.166992 14.1666 1.47283 14.1666 3.08366V3.08366L17.0957 2.35138C17.9887 2.12813 18.8936 2.67107 19.1168 3.56406C19.1499 3.69626 19.1666 3.83202 19.1666 3.96829V8.03237C19.1666 8.95284 18.4204 9.69903 17.4999 9.69903C17.3636 9.69903 17.2279 9.68232 17.0957 9.64927L14.1666 8.91699V8.91699C14.1666 10.5836 12.8156 11.9346 11.149 11.9346H4.83325C2.62411 11.9346 0.833252 10.1437 0.833252 7.93457V4.16699C0.833252 1.95785 2.62411 0.166992 4.83325 0.166992H11.2499ZM12.4999 2.66699H2.49992V9.33366H12.4999V2.66699ZM17.4999 3.96829L14.1666 4.80162V7.19903L17.4999 8.03237V3.96829Z"
                                                            fill="#4A4A4A" />
                                                        <path d="M12.4999 2.66699H2.49992V9.33366H12.4999V2.66699Z"
                                                            fill="#4A4A4A" />
                                                    </svg>
                                                    مشاهدة التسجيل
                                                </a>
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
    </div>
@endsection
