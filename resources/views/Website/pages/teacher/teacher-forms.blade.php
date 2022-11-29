@extends('Website.partials.layout')
@section('title', __('Subjects'))
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

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center justify-content-md-start justify-content-center ">
                                        <div class="box">
                                            <label for=""> حدد الكورس </label>
                                            <div class="input-icon position-relative">
                                                <select name="" id=""
                                                    class="custom-select bg-white p-2 px-4">
                                                    <option value=""> القران الكريم </option>
                                                    <option value=""> القران الكريم </option>
                                                    <option value=""> القران الكريم </option>
                                                    <option value=""> القران الكريم </option>
                                                    <option value=""> القران الكريم </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="box me-3">
                                            <label for=""> حدد الطالب </label>
                                            <div class="input-icon position-relative">
                                                <select name="" id=""
                                                    class="custom-select bg-white p-2 px-4">
                                                    <option value=""> الطالب </option>
                                                    <option value=""> الطالب </option>
                                                    <option value=""> الطالب </option>
                                                    <option value=""> الطالب </option>
                                                    <option value=""> الطالب </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-md-start text-center mt-3 mt-md-0">
                                    <a href="sign_up.php" class="btn-outline clr-royal-blue d-inline-block mt-md-0 mt-2"> <i
                                            class="fa-solid fa-pen"></i> عرض إستمارات المتابعة </a>
                                </div>
                            </div>


                            <div class="table-responsive mt-3">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th> تاريخ الحصة </th>
                                            <th> نوع الحصة </th>
                                            <th> إستمارة المتابعة </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class='bg-white'>
                                            <td> <span class="font-number">Thu Oct 09 2020</span> </td>
                                            <td> حفظ ومراجعة </td>
                                            <td>
                                                <a href="#" class='gray-clr data-form-modal' data-bs-toggle="modal"
                                                    data-bs-target="#formsModal" data-title-lesson='القرأن الكريم'
                                                    data-type='حفظ ومراجعة' data-user-url='##user_url'
                                                    data-user-name='اسم الطالب' data-user-img='assets/img/img-std.png'
                                                    <?php // الماضي البعيد
                                                    ?> data-past-form-sora='البقرة 33333'
                                                    data-past-form-number='الآية 25' data-past-to-sora='آل عمران'
                                                    data-past-to-number='الاية 40' data-past-degree='10' <?php // الماضي القريب
                                                    ?>
                                                    data-past-soon-form-sora='البقرة 1'
                                                    data-past-soon-form-number='الآية 30'
                                                    data-past-soon-to-sora=' 1 آل عمران' data-past-soon-to-number='الاية 45'
                                                    data-past-soon-degree='20' <?php // الحفظ السابق
                                                    ?>
                                                    data-save-last-form-sora='البقرة 2'
                                                    data-save-last-form-number='الآية 35'
                                                    data-save-last-to-sora=' 2 آل عمران' data-save-last-to-number='الاية 50'
                                                    data-save-last-degree='30' <?php // الحفظ الجديد
                                                    ?>
                                                    data-save-new-form-sora='البقرة 3' data-save-new-form-number='الآية 40'
                                                    data-save-new-to-sora=' 3 آل عمران' data-save-new-to-number='الاية 55'
                                                    <?php // الماضي القريب في الحصة التالية
                                                    ?> data-pastsoon-next-form-sora='البقرة 4'
                                                    data-pastsoon-next-form-number='الآية 45'
                                                    data-pastsoon-next-to-sora=' 4 آل عمران'
                                                    data-pastsoon-next-to-number='الاية 60' <?php // الماضي البعيد في الحصة التالية
                                                    ?>
                                                    data-past-next-form-sora='البقرة 5'
                                                    data-past-next-form-number='الآية 50'
                                                    data-past-next-to-sora=' 5 آل عمران'
                                                    data-past-next-to-number='الاية 70'> عرض إستمارة المتابعة</a>
                                            </td>
                                        </tr>

                                        <tr class='bg-white'>
                                            <td> <span class="font-number">Thu Oct 09 2020</span> </td>
                                            <td> حفظ ومراجعة </td>
                                            <td>
                                                <a href="#" class='gray-clr data-form-modal' data-bs-toggle="modal"
                                                    data-bs-target="#formsModal" data-title-lesson='العنوان'
                                                    data-type='النواع' data-user-url='##user_url1'
                                                    data-user-name='اسم الطالب 1' data-user-img='assets/img/img-std.png'
                                                    <?php // الماضي البعيد
                                                    ?> data-past-form-sora='البقرة ت'
                                                    data-past-form-number='ت الآية 25' data-past-to-sora='ت آل عمران'
                                                    data-past-to-number='ت الاية 40' data-past-degree='ت 10'
                                                    <?php // الماضي القريب
                                                    ?> data-past-soon-form-sora='ت البقرة 1'
                                                    data-past-soon-form-number='الآية  ت 30'
                                                    data-past-soon-to-sora=' ت 1 آل عمران'
                                                    data-past-soon-to-number='ت الاية 45' data-past-soon-degree='ت 20'
                                                    <?php // الحفظ السابق
                                                    ?> data-save-last-form-sora='ت البقرة 2'
                                                    data-save-last-form-number='الآية ت 35'
                                                    data-save-last-to-sora=' ت 2 آل عمران'
                                                    data-save-last-to-number='الاية ت 50' data-save-last-degree='ت 30'
                                                    <?php // الحفظ الجديد
                                                    ?> data-save-new-form-sora='البقرة ت 3'
                                                    data-save-new-form-number='الآية ت 40'
                                                    data-save-new-to-sora='ت 3 آل عمران'
                                                    data-save-new-to-number='ت الاية 55' <?php // الماضي القريب في الحصة التالية
                                                    ?>
                                                    data-pastsoon-next-form-sora='ت البقرة 4'
                                                    data-pastsoon-next-form-number='ت الآية 45'
                                                    data-pastsoon-next-to-sora='ت 4 آل عمران'
                                                    data-pastsoon-next-to-number='ت الاية 60' <?php // الماضي البعيد في الحصة التالية
                                                    ?>
                                                    data-past-next-form-sora='البقرة ت 5'
                                                    data-past-next-form-number='الآية ت 50'
                                                    data-past-next-to-sora='ت 5 آل عمران'
                                                    data-past-next-to-number='الاية ت 70'> عرض إستمارة المتابعة</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>



                            <!-- Modal -->
                            <div class="modal fade" id="formsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">إستمارة المتابعة</h1>
                                            <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div
                                                class="mb-3 p-2 rounded border d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h3 class="title-lesson mb-0 fs-4"></h3>
                                                    <h4 class="h6 title-type gray-clr"></h4>
                                                </div>
                                                <div class="d-flex std-user align-items-center">
                                                    <img src="" class="rounded ms-2" width="35">
                                                    <span> <a href="" class="text-decoration-none"> </a> </span>
                                                </div>
                                            </div>

                                            <div class="rounded p-2 border mb-2">
                                                <h3 class='fs-6 fw-bold mb-1'> الماضي البعيد </h3>
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="row g-2">
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for=""> من </label>
                                                                    <span class="past-form-sora"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for="" class='opacity-0'> من </label>
                                                                    <span class="past-form-number"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for=""> إلى </label>
                                                                    <span class="past-to-sora"></span>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for="" class='opacity-0'> إلى </label>
                                                                    <span class="past-to-number"></span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-input mt-md-0 mt-2">
                                                            <label for=""> درجة الماضي البعيد </label>
                                                            <span class='past-degree'></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="rounded p-2 border mb-2">
                                                <h3 class='fs-6 fw-bold mb-1'> الماضي القريب </h3>
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="row g-2">
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for=""> من </label>
                                                                    <span class="past-soon-form-sora"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for="" class='opacity-0'> من </label>
                                                                    <span class="past-soon-form-number"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for=""> إلى </label>
                                                                    <span class="past-soon-to-sora"></span>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for="" class='opacity-0'> إلى </label>
                                                                    <span class="past-soon-to-number"></span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-input mt-md-0 mt-2">
                                                            <label for=""> درجة الماضي القريب </label>
                                                            <span class="past-soon-degree"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="rounded p-2 border mb-2">
                                                <h3 class='fs-6 fw-bold mb-1'> الحفظ السابق </h3>
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="row g-2">
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for=""> من </label>
                                                                    <span class="save-last-form-sora"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for="" class='opacity-0'> من </label>
                                                                    <span class='save-last-form-number'></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for=""> إلى </label>
                                                                    <span class="save-last-to-sora"></span>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for="" class='opacity-0'> إلى </label>
                                                                    <span class="save-last-to-number"></span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-input mt-md-0 mt-2">
                                                            <label for=""> درجة الحفظ السابق </label>
                                                            <span class="save-last-degree"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="rounded p-2 border mb-2">
                                                <h3 class='fs-6 fw-bold mb-1'> الحفظ الجديد </h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row g-2">
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for=""> من </label>
                                                                    <span class="save-new-form-sora"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for="" class='opacity-0'> من </label>
                                                                    <span class="save-new-form-number"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for=""> إلى </label>
                                                                    <span class="save-new-to-sora"></span>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for="" class='opacity-0'> إلى </label>
                                                                    <span class="save-new-to-number"></span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="rounded p-2 border mb-2">
                                                <h3 class='fs-6 fw-bold mb-1'> الماضي القريب في الحصة التالية </h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row g-2">
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for=""> من </label>
                                                                    <span class="pastsoon-next-form-sora"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for="" class='opacity-0'> من </label>
                                                                    <span class="pastsoon-next-form-number"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for=""> إلى </label>
                                                                    <span class='pastsoon-next-to-sora'></span>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for="" class='opacity-0'> إلى </label>
                                                                    <span class="pastsoon-next-to-number"></span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="rounded p-2 border mb-2">
                                                <h3 class='fs-6 fw-bold mb-1'> الماضي البعيد في الحصة التالية </h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row g-2">
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for=""> من </label>
                                                                    <span class="past-next-form-sora"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for="" class='opacity-0'> من </label>
                                                                    <span class='past-next-form-number'></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for=""> إلى </label>
                                                                    <span class="past-next-to-sora"></span>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3 col-6">
                                                                <div class="form-input">
                                                                    <label for="" class='opacity-0'> إلى </label>
                                                                    <span class="past-next-to-number"></span>
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
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page -->
@endsection
