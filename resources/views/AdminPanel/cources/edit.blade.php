@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="#" class="pe-3 text-muted"> الكورسات </a></li>
                    <li class="breadcrumb-item pe-3 text-primary">اضافة جديد</li>
                </ol>
            </div>       
            <form action=""> 
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body fs-6 p-5 text-gray-700">
                                <div class="mb-3">
                                    <label class="form-label fw-bolder">  اسم الكورس  </label>
                                    <input type="text" class="form-control form-control-solid" >                            
                                </div>
                                <div id="kt_docs_quill_basic" name="kt_docs_quill_basic"> </div>

                                <div class="count-hour mb-3 mt-4 d-flex align-items-center">
                                    <!--begin::Input group-->
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInputValue" placeholder=" " value="" />
                                        <label for="floatingInputValue"> عدد ساعات الكورس  </label>
                                    </div>

                                    <span class='ms-4'> مقدار وقت الحصة </span>
                                    <div class="btn-group w-150px mx-3" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                        <label class="btn btn-outline btn-color-muted btn-active-primary" data-kt-button="true">
                                            <input class="btn-check" type="radio" name="method" value="1"/>
                                            30
                                        </label>
                                    
                                        <label class="btn btn-outline btn-color-muted btn-active-primary active" data-kt-button="true">
                                            <input class="btn-check" type="radio" name="method" checked="checked" value="2"/>
                                            45
                                        </label>

                                        <label class="btn btn-outline btn-color-muted btn-active-primary" data-kt-button="true">
                                            <input class="btn-check" type="radio" name="method" value="3" />
                                            60
                                        </label>
                                    </div>
                                    <span class='ms-3'> دقيقة </span>
                                </div>

                                <div class="form-floating mb-3   select-std">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected> أختر الطالب </option>
                                        <option value="1">  أحمد محمد   </option>
                                        <option value="2"> سليما علي  </option>
                                        <option value="3">وفاء محمد </option>
                                    </select>
                                    <label for="floatingSelect">الطالب</label>
                                </div>


                                <div class="form-floating mb-3 select-teacher">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected> أختر المعلم </option>
                                        <option value="1">  أحمد محمد   </option>
                                        <option value="2"> سليما علي  </option>
                                        <option value="3">وفاء محمد </option>
                                    </select>
                                    <label for="floatingSelect">المعلم</label>
                                </div>

                                <div class="abibility-teacher">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th> اليوم </th>
                                                <th> الموعد المتاح </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 
                                                    السبت
                                                </td>
                                                <td> 
                                                    <div class="time mb-2 fs-13px d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <span class='fw-bolder'> من  </span>
                                                            <span class="text-muted">10:10 صباحا </span>
                                                            <span class='fw-bolder'> إلى  </span>
                                                            <span class="text-muted">12:00  مساءا  </span>                                                            
                                                        </div>
                                                        <button class="btn btn-info ms-3 sm-padding"> حجز الان </button>
                                                    </div>
                                                    <div class="time mb-2 fs-13px d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <span class='fw-bolder'> من  </span>
                                                            <span class="text-muted">10:10 صباحا </span>
                                                            <span class='fw-bolder'> إلى  </span>
                                                            <span class="text-muted">12:00  مساءا  </span>                                                            
                                                        </div>
                                                        <button class="btn btn-info ms-3 sm-padding"> حجز الان </button>
                                                    </div>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td> 
                                                    الاثنين
                                                </td>
                                                <td> 
                                                    <div class="time mb-2 fs-13px d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <span class='fw-bolder'> من  </span>
                                                            <span class="text-muted">10:10 صباحا </span>
                                                            <span class='fw-bolder'> إلى  </span>
                                                            <span class="text-muted">12:00  مساءا  </span>                                                            
                                                        </div>
                                                        <button class="btn btn-info ms-3 sm-padding"> حجز الان </button>
                                                    </div>
                                                </td>
                                            </tr> 
                                            
                                            <tr>
                                                <td> 
                                                    الخميس
                                                </td>
                                                <td> 
                                                    <div class="time mb-2 fs-13px d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <span class='fw-bolder'> من  </span>
                                                            <span class="text-muted">10:10 صباحا </span>
                                                            <span class='fw-bolder'> إلى  </span>
                                                            <span class="text-muted">12:00  مساءا  </span>                                                            
                                                        </div>
                                                        <button class="btn btn-info ms-3 sm-padding"> حجز الان </button>
                                                    </div>
                                                    <div class="time mb-2 fs-13px d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <span class='fw-bolder'> من  </span>
                                                            <span class="text-muted">10:10 صباحا </span>
                                                            <span class='fw-bolder'> إلى  </span>
                                                            <span class="text-muted">12:00  مساءا  </span>                                                            
                                                        </div>
                                                        <button class="btn btn-info ms-3 sm-padding"> حجز الان </button>
                                                    </div>

                                                    <div class="time mb-2 fs-13px d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <span class='fw-bolder'> من  </span>
                                                            <span class="text-muted">10:10 صباحا </span>
                                                            <span class='fw-bolder'> إلى  </span>
                                                            <span class="text-muted">12:00  مساءا  </span>                                                            
                                                        </div>
                                                        <button class="btn btn-info ms-3 sm-padding" disabled> محجوز </button>
                                                    </div>                                                    

                                                </td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>                                 
                            </div>
                        </div>                        
                    </div>
                    <div class="col-md-3">
                        <div class="card sidebar">
                            <div class="card-body fs-6 p-5 text-gray-700">

                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected> أختر القسم</option>
                                        <option value="1">  أطفال  </option>
                                        <option value="2"> نساء </option>
                                        <option value="3">رجال</option>
                                    </select>
                                    <label for="floatingSelect">القسم</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected> أختر مادة الكورس</option>
                                        <option value="1"> قرآن  </option>
                                        <option value="2">لغة عربية</option>
                                        <option value="3">سيرة </option>
                                        <option value="3"> أخلاق </option>
                                        <option value="3"> عقيدة </option>
                                        <option value="3"> حديث</option>
                                    </select>
                                    <label for="floatingSelect">مادة الكورس</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected> أختر نوع الحلقة</option>
                                        <option value="1"> حفظ   </option>
                                        <option value="2">مراجعة </option>
                                        <option value="3">تجويد  </option>
                                        <option value="3"> إجازة  </option>
                                    </select>
                                    <label for="floatingSelect"> نوع الحلقة </label>
                                </div>
                                 

                                <div class="form-floating mb-3">
                                    <select class="form-select" id="SelectTypeCourse" aria-label="Floating label select example">
                                        <option selected> أختر نوع الكورس </option>
                                        <option value="single">  فردي  </option>
                                        <option value="group">  مجموعة  </option>
                                     </select>
                                    <label for="SelectTypeCourse">نوع الكورس</label>
                                </div>  
                                
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="SelectTypeCourse" aria-label="Floating label select example">
                                        <option selected> أختر المشرف على هذا الكورس </option>
                                        <option  >  علي  </option>
                                        <option  >  احمد  </option>
                                        <option  >  عليان  </option>
                                     </select>
                                    <label for="SelectTypeCourse">المشرف</label>
                                </div>                                  
                                
                                <div class="mb-3 SelectTypeCourse group">
                                    <input type="text" class="form-control form-control-solid" placeholder='اكتب اسم المجموعة ..' > 
                                </div>


                                <div class="isResubscribe mb-3">
                                    <label for=""> هل الكورس لمرة واحدة أم يجدد الاشتراك ؟ </label>

                                    <!--begin::Radio group-->
                                    <div class="btn-group w-100 mt-1 border rounded overflow-hidden" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                        <label class="btn btn-outline btn-color-muted btn-active-secondary" data-kt-button="true">
                                            <input class="btn-check" type="radio" name="method" value="1"/>
                                            مرة واحدة
                                        </label>
                                        <label class="btn btn-outline btn-color-muted btn-active-secondary active" data-kt-button="true">
                                            <input class="btn-check" type="radio" name="method" checked="checked" value="2"/>
                                            يجدد الاشتراك
                                        </label>
                                    
                                    </div>
                                    <!--end::Radio group-->                                    
                                </div>

                                <div class="isResubscribe mb-3">
                                    <label for="">  حالة الكورس  </label>

                                    <!--begin::Radio group-->
                                    <div class="btn-group w-100 mt-1 border rounded overflow-hidden" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                        <label class="btn btn-outline btn-color-muted btn-active-success" data-kt-button="true">
                                            <input class="btn-check" type="radio" name="method" value="1"/>
                                            نشط
                                        </label>
                                        <label class="btn btn-outline btn-color-muted btn-active-danger active" data-kt-button="true">
                                            <input class="btn-check" type="radio" name="method" checked="checked" value="2"/>
                                            متوقف
                                        </label>
                                    
                                    </div>
                                    <!--end::Radio group-->                                    
                                </div>                                
                                
                                <div class="row price mb-4 mt-2 g-2">
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputValue" placeholder=" " value="" />
                                            <label for="floatingInputValue"> سعر الساعة للطالب  </label>
                                        </div>                                        
                                    </div>
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputValue" placeholder=" " value="" />
                                            <label for="floatingInputValue"> سعر الساعة للمعلم  </label>
                                        </div>                                        
                                    </div>                                    
                                </div>

                                

                                <label for="" class="form-label fw-bolder mb-2"> ارفاق صورة </label>
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline w-100" 
                                    data-kt-image-input="true"  >
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-100 h-200px shadow-sm" 
                                        style="background-image: url(/assets/media/avatars/300-1.jpg)"></div>
                                    <!--end::Image preview wrapper-->

                                    <!--begin::Edit button-->
                                    <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow-sm"
                                        data-kt-image-input-action="change"
                                        data-bs-toggle="tooltip"
                                        data-bs-dismiss="click"
                                        title="تغيير الصورة">
                                        <i class="bi bi-pencil-fill fs-7"></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow-sm"
                                        data-kt-image-input-action="cancel"
                                        data-bs-toggle="tooltip"
                                        data-bs-dismiss="click"
                                        title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow-sm"
                                        data-kt-image-input-action="remove"
                                        data-bs-toggle="tooltip"
                                        data-bs-dismiss="click"
                                        title="حذف الصورة">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove button-->
                                </div>
                                <!--end::Image input-->




                                <button href="#" class="px-20  mt-5 btn btn-primary btn-hover-rise fw-bolder d-block w-100">  حفظ  </button>
                            </div>
                        </div> 
                    </div>
                </div>
            </form>

 
        </div>
    </div>
</div>
@endsection

@section('script')

<script>
    var quill = new Quill('#kt_docs_quill_basic', {
        modules: {
            toolbar: [
                [{
                    header: [1, 2, false]
                }],
                ['bold', 'italic', 'underline'],
                ['image', 'code-block'],
                [{ 'color': [] }, { 'background': [] }], 
                [{ 'direction': 'rtl' }],
            ]
        },
        placeholder: 'كتابة الوصف الخاص بالكورس',
        theme: 'snow' // or 'bubble'
    });    
</script>
<script>
    $(function () {

        $("#SelectTypeCourse").on('change', function () {

            $('.' + $(this).val()).show();

        });

    });
</script>
@endsection
