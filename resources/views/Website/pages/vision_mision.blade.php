@extends('Website.partials.layout')
@section('content')
    <div class="page page-data mb-5">

        <header class="header-page">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-3 mb-0">
                        <li class="breadcrumb-item"><a href="#"> الرئيسية </a></li>
                        <li class="breadcrumb-item"><a href="#"> من نحن </a></li>
                        <li class="breadcrumb-item active" aria-current="page"> الرؤية والرسالة </li>
                    </ol>
                </nav>
                <div class="heading-page shadow-box  bg-white rounded-lg mb-4 p-4"
                    style='background-image: url(assets/img/img10.png); background-position: center left;background-size: cover;'>
                    <h1 class="h1 clr-royal-blue text-center fw-bold  mb-0 pt-md-5 pt-3 mt-md-3"> الرؤية والرسالة </h1>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <div class="profile-data page-videos">
            <div class="container">
                <div class="bg-white p-4 rounded-lg border">
                    <div class="box mb-4">
                        <h2 class='h3'> رسالتنا </h2>
                        <p>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                            التطبيق.
                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص
                            لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                            يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.

                        </p>
                        <p>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                            التطبيق.
                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص
                            لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                            يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                        </p>
                    </div>
                    <div class="box">
                        <h2 class='h3'> رؤيتنا </h2>
                        <p>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                            التطبيق.
                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص
                            لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                            يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.

                        </p>
                        <p>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                            التطبيق.
                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص
                            لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                            يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Video vidInfoTeacher -->
        <div class="modal fade" id="vidInfoTeacher" tabindex="-1" aria-labelledby="vidInfoTeacherLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="vidInfoTeacherLabel"> </h1>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="content"></div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- End Page -->
@endsection
