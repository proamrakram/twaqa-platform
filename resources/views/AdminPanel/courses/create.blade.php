@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection


@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="{{route('admin.courses.index')}}" class="pe-3 text-muted"> الكورسات </a></li>
                    <li class="breadcrumb-item pe-3 text-primary">اضافة جديد</li>
                </ol>
            </div>
            <form method="post" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body fs-6 p-5 text-gray-700">
                                <div class="mb-3">
                                    <label class="form-label fw-bolder"> اسم الكورس </label>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control form-control-solid @error('name') is-invalid @enderror">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <textarea name="description" id="summary-ckeditor" class="form-control @error('description') is-invalid @enderror " rows="20">{{old('description')}} </textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror


                                <div class="count-hour mb-3 mt-4 d-flex align-items-center">
                                    <!--begin::Input group-->
                                    <div class="form-floating">
                                        <input type="text" name="hours" class="form-control  @error('hours') is-invalid @enderror" id="floatingInputValue" placeholder=" " value="{{old('hours')}}" />
                                        @error('hours')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label for="floatingInputValue"> عدد ساعات الكورس </label>
                                    </div>

                                    <span class='ms-4'> مقدار وقت الحصة </span>
                                    <div class="btn-group w-150px mx-3   @error('period') is-invalid @enderror" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                        <label class="btn btn-outline btn-color-muted btn-active-primary  @if(old('period') == '30') active  @endif" data-kt-button="true">
                                            <input class="btn-check" type="radio" name="period" @if(old('period')=="30" ) checked="checked" @endif value="30" />
                                            30
                                        </label>

                                        <label class="btn btn-outline btn-color-muted btn-active-primary @if(is_null(old('period')) ||old('period') == '45') active  @endif" data-kt-button="true">
                                            <input class="btn-check" type="radio" name="period" @if(is_null(old('period')) ||old('period')=="45" ) checked="checked" @endif value="45" />
                                            45
                                        </label>

                                        <label class="btn btn-outline btn-color-muted btn-active-primary  @if(old('period') == '60') active  @endif" data-kt-button="true">
                                            <input class="btn-check" type="radio" name="period" @if(old('period')=="60" ) checked="checked" @endif value="60" />
                                            60
                                        </label>
                                    </div>
                                    @error('period')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <span class='ms-3'> دقيقة </span>
                                </div>

                                <div class="form-floating mb-3   select-std">
                                    <select name="student_id[]" class="form-select   form-control-solid   @error('student_id') is-invalid @enderror" multiple="multiple" data-control="select2" data-dropdown-css-class="w-200px" data-placeholder="اختر .." data-hide-search="true">
                                        @foreach($students as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('student_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="floatingSelect">الطالب</label>
                                </div>


                                <div class="form-floating mb-3 select-teacher">
                                    <select name="teacher_id" id="teacher-dropdown" class="form-select   @error('teacher_id') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected> أختر المعلم </option>
                                        @foreach($teachers as $user)
                                        <option value="{{$user->id}}" @if(old('teacher_id')==$user->id) selected @endif >{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('teacher_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="floatingSelect">المعلم</label>
                                </div>

                                <div class="abibility-teacher">
                                    <table class="table table-striped table-hover  @error('checkbox') is-invalid @enderror">
                                        <thead>
                                            <tr>
                                                <th> اليوم </th>
                                                <th> الموعد المتاح </th>
                                            </tr>
                                        </thead>
                                        <tbody id="working_hours_table">
                                        </tbody>
                                    </table>
                                    @error('checkbox')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card sidebar">
                            <div class="card-body fs-6 p-5 text-gray-700">

                                <div class="form-floating mb-3">
                                    <select name="department" class="form-select  @error('department') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected> أختر القسم</option>
                                        <option @if(old('department')=="men" ) selected @endif value="men">رجال </option>
                                        <option @if(old('department')=="women" ) selected @endif value="women"> نساء </option>
                                        <option @if(old('department')=="children" ) selected @endif value="children"> أطفال </option>
                                    </select>

                                    @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <label for="floatingSelect">القسم</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select name="category" class="form-select @error('category') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected> أختر مادة الكورس</option>

                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}" @if(old('category')==$category->id) selected @endif >{{$category->title}}</option>
                                        @endforeach
                                    </select>

                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="floatingSelect">مادة الكورس</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select name="lesson_type_id" class="form-select @error('lesson_type_id') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected> أختر نوع الحلقة</option>
                                        @foreach($lesson_types as $type)
                                        <option value="{{$type->id}}" @if(old('lesson_type_id')==$type->id) selected @endif >{{$type->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('lesson_type_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="floatingSelect"> نوع الحلقة </label>
                                </div>


                                <div class="form-floating mb-3">
                                    <select name="course_type_id" class="form-select @error('course_type_id') is-invalid @enderror" id="SelectTypeCourse" aria-label="Floating label select example">
                                        <option selected> أختر نوع الكورس </option>

                                        @foreach($course_types as $type)
                                        <option value="{{$type->id}}" @if(old('course_type_id')==$type->id) selected @endif >{{$type->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('course_type_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="SelectTypeCourse">نوع الكورس</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select name="supervisor_id" class="form-select @error('supervisior_id') is-invalid @enderror" id="SelectTypeCourse" aria-label="Floating label select example">
                                        <option selected> أختر المشرف على هذا الكورس </option>

                                        @foreach($supervisors as $user)
                                        <option value="{{$user->id}}" @if(old('supervisor_id')==$user->id) selected @endif >{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('supervisor_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="SelectTypeCourse">المشرف</label>
                                </div>

                                <div class="mb-3 SelectTypeCourse group">
                                    <input type="text" name="group_name" class="form-control form-control-solid @error('group_name') is-invalid @enderror" placeholder='اكتب اسم المجموعة ..' value="{{old('group_name')}}">

                                    @error('group_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="isResubscribe mb-3">
                                    <label for=""> هل الكورس لمرة واحدة أم يجدد الاشتراك ؟ </label>

                                    <!--begin::Radio group-->
                                    <div class="btn-group w-100 mt-1 border rounded overflow-hidden @error('renewed') is-invalid @enderror" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                        <label class="btn btn-outline btn-color-muted btn-active-secondary @if(is_null(old('renewed')) || old('renewed') == 0)  active  @endif" data-kt-button="true">
                                            <input class="btn-check" type="radio" name="renewed" @if(is_null(old('renewed')) || old('renewed')==0) checked="checked" @endif value="0" />
                                            مرة واحدة
                                        </label>
                                        <label class="btn btn-outline btn-color-muted btn-active-secondary @if(old('renewed') == 1)  active @endif" data-kt-button="true">
                                            <input class="btn-check" type="radio" name="renewed" @if(old('renewed')==1) checked="checked" @endif value="1" />
                                            يجدد الاشتراك
                                        </label>

                                        @error('renewed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <!--end::Radio group-->
                                </div>

                                <div class="isResubscribe mb-3">
                                    <label for=""> حالة الكورس </label>

                                    <!--begin::Radio group-->
                                    <div class="btn-group w-100 mt-1 border rounded overflow-hidden @error('active') is-invalid @enderror" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                        <label class="btn btn-outline btn-color-muted btn-active-success @if(old('active') == 1)  active  @endif" data-kt-button="true">
                                            <input class="btn-check" type="radio" name="active" @if(old('active')==1) checked="checked" @endif value="1" />
                                            نشط
                                        </label>
                                        <label class="btn btn-outline btn-color-muted btn-active-danger @if(is_null(old('active')) || old('active') == 0)  active  @endif" data-kt-button="true">
                                            <input class="btn-check" type="radio" name="active" @if(is_null(old('active')) || old('active')==0) checked="checked" @endif value="0" />
                                            متوقف
                                        </label>

                                        @error('active')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <!--end::Radio group-->
                                </div>

                                <div class="row price mb-4 mt-2 g-2">
                                    <div class="col">
                                        <div class="form-floating">
                                            <input name="student_price" type="text" class="form-control @error('student_price') is-invalid @enderror" id="floatingInputValue" placeholder=" " value="{{old('student_price')}}" />

                                            @error('student_price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <label for="floatingInputValue"> سعر الساعة للطالب </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating">
                                            <input name="teacher_price" type="text" class="form-control @error('teacher_price') is-invalid @enderror" id="floatingInputValue" placeholder=" " value="{{old('teacher_price')}}" />

                                            @error('teacher_price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <label for="floatingInputValue"> سعر الساعة للمعلم </label>
                                        </div>
                                    </div>

                                </div>


                                <div class="row price mb-4 mt-2 g-2">
                                    <div class="col">
                                        <div class="form-floating">

                                            <select name="student_price_currency" class="form-select  @error('student_price_currency') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example">
                                                <option selected> أختر العملة</option>
                                                @foreach($currencies as $currency)
                                                <option @if(old('student_price_currency')==$currency->id ) selected @endif value="{{$currency->id}}">{{$currency->name}} </option>
                                                @endforeach
                                            </select>
                                            @error('student_price_currency')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <label for="floatingInputValue">عملة سعر للمعلم </label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-floating">

                                            <select name="teacher_price_currency" class="form-select  @error('teacher_price_currency') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example">
                                                <option selected> أختر العملة</option>
                                                @foreach($currencies as $currency)
                                                <option @if(old('teacher_price_currency')==$currency->id ) selected @endif value="{{$currency->id}}">{{$currency->name}} </option>
                                                @endforeach
                                            </select>
                                            @error('teacher_price_currency')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <label for="floatingInputValue"> عملة سعر للمعلم </label>
                                        </div>
                                    </div>

                                </div>

                                <label for="" class="form-label fw-bolder mb-2"> ارفاق صورة </label>
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline w-100" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-100 h-200px shadow-sm" style="background-image: url({{asset('assets/media/300-1.jpg')}})"></div>
                                    <!--end::Image preview wrapper-->

                                    <!--begin::Edit button-->
                                    <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow-sm" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="تغيير الصورة">
                                        <i class="bi bi-pencil-fill fs-7"></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow-sm" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow-sm" data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click" title="حذف الصورة">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove button-->
                                </div>

                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <!--end::Image input-->




                                <button href="#" class="px-20  mt-5 btn btn-primary btn-hover-rise fw-bolder d-block w-100"> حفظ </button>
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
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('summary-ckeditor');
</script>


<script>
    $(document).ready(function() {
        $('[name=period],[name=teacher_id]').on('change', function() {
            var teacher = $("[name=teacher_id]").val();
            var period = $("input[name='period']:checked").val();
            $("#working_hours_table").html('');
            $.ajax({
                url: "{{url('/admin/get-working-hours')}}",
                type: "POST",
                data: {
                    teacher: teacher,
                    period: period,
                    course: null,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(result) {
                    $.each(result, function(key, value) {
                        $('#working_hours_table').append('<tr><td> ' + value.day + '(' + value.date + ')</td><td id="day-' + value.day + '">');

                        $.each(value.times, function(key1, value1) {
                            $('#day-' + value.day).append('<div class="time mb-2 fs-13px d-flex align-items-center justify-content-between"><div><span class="fw-bolder"> من </span><span class="text-muted">' + value1.time_from + ' </span><span class="fw-bolder"> إلى </span><span class="text-muted">' + value1.time_to + ' </span></div><input type="checkbox" name="checkbox[' + value.date + '][]" value="' +
                                value1.time_from + '" class="btn btn-info ms-3 sm-padding" ></div>');
                        });

                        $('#working_hours_table').append('</td></tr>');
                    });
                }
            });
        });
    });
</script>
@endsection