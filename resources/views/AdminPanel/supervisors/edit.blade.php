@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="{{route('admin.supervisors.index')}}" class="pe-3 text-muted">المشرفين</a></li>
                    <li class="breadcrumb-item pe-3 text-primary">تعديل</li>
                </ol>
            </div>
            <div class="card">
                <div class="card-body fs-6 p-5 text-gray-700">
                    <h3 class='mb-5'> البيانات الاساسية </h3>
                    <form method="post" action="{{ route('admin.supervisors.update',['id'=>$user->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="form-label fw-bolder d-block"> اختر صورة </label>
                                <div class="image-input image-input-outline mb-8" data-kt-image-input="true" style="background-image: url({{asset('assets/media/svg/avatars/blank.svg')}})">

                                    <div class="image-input-wrapper w-200px h-200px  @error('avatar') is-invalid @enderror" style="background-image: url(@if($user->img != '') {{$user->img}} @else {{asset('assets/media/300-1.jpg')}}@endif)"></div>

                                    <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="تغير الصورة">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click" title="حذف الصورة">
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
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label fw-bolder">الاسم</label>
                                    <input name="name" type="text" value="{{$user->full_name}}" class="form-control form-control-solid  @error('name') is-invalid @enderror">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bolder"> السن </label>
                                    <input name="age" type="text" value="{{$user->age}}" class=" form-control form-control-solid @error('age') is-invalid @enderror">

                                    @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bolder"> الدولة </label>
                                    <div class="row gx-2">
                                        <div class="col-12">
                                            <select name="country_id" class="form-select form-select-solid @error('country_id') is-invalid @enderror" data-control="select2" data-dropdown-css-class="w-200px" data-placeholder="اختر .." data-hide-search="true">
                                                <option></option>
                                                @foreach($countries as $country)
                                                <option @if($user->country_id==$country->id) selected @endif value="{{$country->id}}">{{$country->country_name}} </option>
                                                @endforeach
                                            </select>
                                            @error('country_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label fw-bolder"> البريد الإلكتروني </label>
                                    <input name="email" type="email" value="{{$user->email}}" class="form-control form-control-solid @error('email') is-invalid @enderror">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row gx-3">
                                    <div class="col mb-5">
                                        <label class="form-label fw-bolder"> الهاتف </label>
                                        <input name="phonenumber" value="{{$user->phonenumber}}" type="text" class="form-control form-control-solid @error('phonenumber') is-invalid @enderror">

                                        @error('phonenumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col mb-5">
                                        <label class="form-label fw-bolder"> هاتف اخر </label>
                                        <input name="phonenumber2" value="{{$user->phonenumber2}}" type="text" class="form-control form-control-solid @error('phonenumber2') is-invalid @enderror">

                                        @error('phonenumber2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row gx-3">
                                        <div class="col">
                                            <label class="form-label fw-bolder"> رابط صفحة فيس بوك </label>
                                            <input name="facebook" value="{{$user->facebook}}" type="text" class="form-control form-control-solid @error('facebook') is-invalid @enderror">

                                            @error('facebook')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label class="form-label fw-bolder"> رابط صفحة تويتر </label>
                                            <input name="twitter" value="{{$user->twitter}}" type="text" class="form-control form-control-solid @error('twitter') is-invalid @enderror">

                                            @error('twitter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-md-4 mb-5">
                                <label class="form-label fw-bolder"> المؤهل العلمي </label>
                                <input name="qualification" type="text" value="{{$user->qualification}}" class="form-control form-control-solid @error('qualification') is-invalid @enderror" placeholder='  '>

                                @error('qualification')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-5">
                                <label class="form-label fw-bolder"> الوظيفة الحالية </label>
                                <input name="position" type="text" value="{{$user->position}}" class="form-control form-control-solid @error('position') is-invalid @enderror" placeholder='  '>

                                @error('position')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="col-md-4 mb-5">
                                <label class="form-label fw-bolder"> تاريخ الانضمام للاكاديمية </label>
                                <input name="registered_at" type="date" value="{{$user->registered_at}}" class="datepickr form-control form-control-solid @error('registered_at') is-invalid @enderror">

                                @error('registered_at')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-5">
                                <label class="form-label fw-bolder"> التخصص </label>
                                <select name="category" class="form-select form-select-solid @error('category') is-invalid @enderror" data-control="select2" data-dropdown-css-class="w-200px" data-placeholder="اختر .." data-hide-search="true">
                                    <option></option>
                                    @foreach($categories as $category)
                                    <option @if($user->category == $category->id) selected @endif value="{{$category->id}}">{{$category->title}} </option>
                                    @endforeach
                                </select>

                                @error('department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-5">
                                <label class="form-label fw-bolder"> الجنس </label>
                                <select name="gender" class="form-select form-select-solid @error('gender') is-invalid @enderror" data-control="select2" data-dropdown-css-class="w-200px" data-placeholder="اختر .." data-hide-search="true">
                                    <option></option>
                                    <option @if($user->gender == "male") selected @endif value="male">ذكر </option>
                                    <option @if($user->gender == "female") selected @endif value="female">أنثى </option>
                                </select>

                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-5">
                                <label class="form-label fw-bolder d-block">الحالة</label>
                                <label class=" mt-3 form-check form-switch form-check-custom form-check-solid d-inline-block">
                                    <input name="active" class="form-check-input h-20px w-40px  @error('active') is-invalid @enderror" type="checkbox" value="1" @if($user->active == 1) checked="checked" @endif/>

                                    @error('active')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </label>
                            </div>


                        </div>


                        <div class="text-end">
                            <button type="submit" class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder"> حفظ </button>
                        </div>
                    </form>
                </div>
            </div>

            <form method="post" action="{{ route('admin.supervisors.update-certificates',['id'=>$user->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="card mt-4">
                    <div class="card-body fs-6 p-5 text-gray-700">
                        <h3 class='mb-5'> الشهادات </h3>
                        <!--begin::Repeater-->
                        <div class='certificate'>
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div data-repeater-list="certificate">

                                    <?php $i = 0 ?>
                                    @foreach($user->teacherCertificates as $c)

                                    
                                    <div data-repeater-item>
                                        <div class="form-group row  ">
                                            <div class="col-md-3">
                                                <label class="form-label"> درجة المؤهل الدراسي </label>

                                                <input type="hidden" class="form-control mb-2 " name="id" value="{{$c->id}}">
                                                <input type="text" name="certificate_name" value="{{$c->certificate_name}}" class="form-control mb-2 mb-md-0" placeholder="درجة المؤهل الدراسي" />

                                                @error('certificate.'.$i.'.certificate_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">الجامعة</label>
                                                <div class="row gx-2">
                                                    <div class="col-6">
                                                        <input type="text" name="university" value="{{$c->university}}" class="form-control mb-2" placeholder="الجامعة" />

                                                        @error('certificate.'.$i.'.university')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="specialization" value="{{$c->specialization}}" class="form-control mb-2" placeholder="التخصص" />

                                                        @error('certificate.'.$i.'.specialization')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-2">
                                                <label class="form-label">الدولة</label>
                                                <div class="row gx-2">
                                                    <div class="col-12">
                                                        <select name="country_id" class="form-select form-select-solid" data-control="select2" data-dropdown-css-class="w-200px" data-placeholder="اختر .." data-hide-search="true">
                                                            <option></option>
                                                            @foreach($countries as $country)
                                                            <option value="{{$country->id}}" @if($country->id == $c->country_id) selected @endif>{{$country->country_name}} </option>
                                                            @endforeach
                                                        </select>
                                                        @error('certificate.'.$i.'.country_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">السنة</label>
                                                <div class="row gx-2">
                                                    <div class="col-12">
                                                        <input type="text" name="year" value="{{$c->year}}" class=" form-control mb-2" placeholder="السنة" />

                                                        @error('certificate.'.$i.'.year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8 py-4 d-block">
                                                    <i class="la la-trash-o"></i> حذف
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <?php $i++ ?>
                                    @endforeach
                                    @if(is_null($user->teacherCertificates))
                                  
                                    
                                    <div data-repeater-item>
                                        <div class="form-group row  ">
                                            <div class="col-md-3">
                                                <label class="form-label"> درجة المؤهل الدراسي </label>

                                                <input type="hidden" class="form-control mb-2 " name="id">
                                                <input type="text" name="certificate_name"class="form-control mb-2 mb-md-0" placeholder="درجة المؤهل الدراسي" />

                                                @error('certificate.'.$i.'.certificate_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">الجامعة</label>
                                                <div class="row gx-2">
                                                    <div class="col-6">
                                                        <input type="text" name="university" class="form-control mb-2" placeholder="الجامعة" />

                                                        @error('certificate.'.$i.'.university')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="specialization" class="form-control mb-2" placeholder="التخصص" />

                                                        @error('certificate.'.$i.'.specialization')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-2">
                                                <label class="form-label">الدولة</label>
                                                <div class="row gx-2">
                                                    <div class="col-12">
                                                        <select name="country_id" class="form-select form-select-solid" data-control="select2" data-dropdown-css-class="w-200px" data-placeholder="اختر .." data-hide-search="true">
                                                            <option></option>
                                                            @foreach($countries as $country)
                                                            <option value="{{$country->id}}">{{$country->country_name}} </option>
                                                            @endforeach
                                                        </select>
                                                        @error('certificate.'.$i.'.country_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">السنة</label>
                                                <div class="row gx-2">
                                                    <div class="col-12">
                                                        <input type="text" name="year" class=" form-control mb-2" placeholder="السنة" />

                                                        @error('certificate.'.$i.'.year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8 py-4 d-block">
                                                    <i class="la la-trash-o"></i> حذف
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    @endif

                                </div>
                            </div>
                            <!--end::Form group-->

                            <div class="form-group mt-2">
                                <a href="javascript:;" data-repeater-create class="btn btn-light-info">
                                    <i class="la la-plus"></i> اضف جديد
                                </a>
                            </div>
                            <!--end::Form group-->
                        </div>
                        <div class="text-end">
                            <button type="submit" class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder"> حفظ </button>
                        </div>
                    </div>
                </div>


            </form>

            <form method="post" action="{{ route('admin.supervisors.update-working-hours',['id'=>$user->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="card mt-4">
                    <div class="card-body fs-6 p-5 text-gray-700">
                        <h3 class='mb-5'> ساعات العمل والدوام </h3>
                        <!--begin::Repeater-->
                        <div class='working_hours'>
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div data-repeater-list="working_hours">
                                    <?php $i = 0 ?>
                                    @foreach($user->working_hours as $c)
                                    <div data-repeater-item>
                                        <div class="form-group row  ">
                                            <div class="col-md-3">
                                                <label class="form-label"> اليوم </label>

                                                <input type="hidden" class="form-control mb-2 " name="id" value="{{$c->id}}">
                                                <select name="day" id="" class='form-control mb-2 mb-md-0'>
                                                    <option @if($c->day == 'Saturday') selected @endif value="Saturday"> السبت </option>
                                                    <option @if($c->day == 'Sunday') selected @endif value="Sunday"> الأحد </option>
                                                    <option @if($c->day == 'Monday') selected @endif value="Monday"> الاثنين </option>
                                                    <option @if($c->day == 'Tuesday') selected @endif value="Tuesday"> الثلاثاء </option>
                                                    <option @if($c->day == 'Wednesday') selected @endif value="Wednesday"> الاربعاء </option>
                                                    <option @if($c->day == 'Thursday') selected @endif value="Thursday"> الخميس </option>
                                                    <option @if($c->day == 'Firday') selected @endif value="Firday"> الجمعة </option>
                                                </select>
                                                @error('working_hours.'.$i.'.day')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">الساعة</label>
                                                <div class="row gx-2">
                                                    <div class="col-6">
                                                        <input type="text" value="{{$c->time_from}}" name="time_from" class="datepickrTime form-control mb-2" placeholder="من" />
                                                        @error('working_hours.'.$i.'.time_from')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" value="{{$c->time_to}}" name="time_to" class="datepickrTime form-control mb-2" placeholder="إلى" />
                                                        @error('working_hours.'.$i.'.time_to')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8 py-4 d-block">
                                                    <i class="la la-trash-o"></i> حذف
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $i++ ?>
                                    @endforeach
                                    @if(is_null($user->working_hours))
                                    <div data-repeater-item>
                                        <div class="form-group row  ">
                                            <div class="col-md-3">
                                                <label class="form-label"> اليوم </label>

                                                <input type="hidden" class="form-control mb-2 " name="id">
                                                <select name="day" id="" class='form-control mb-2 mb-md-0'>
                                                    <option value="Saturday"> السبت </option>
                                                    <option value="Sunday"> الأحد </option>
                                                    <option value="Monday"> الاثنين </option>
                                                    <option value="Tuesday"> الثلاثاء </option>
                                                    <option value="Wednesday"> الاربعاء </option>
                                                    <option value="Thursday"> الخميس </option>
                                                    <option value="Firday"> الجمعة </option>
                                                </select>
                                                @error('working_hours.'.$i.'.day')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">الساعة</label>
                                                <div class="row gx-2">
                                                    <div class="col-6">
                                                        <input type="text" name="time_from" class="datepickrTime form-control mb-2" placeholder="من" />
                                                        @error('working_hours.'.$i.'.time_from')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="time_to" class="datepickrTime form-control mb-2" placeholder="إلى" />
                                                        @error('working_hours.'.$i.'.time_to')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8 py-4 d-block">
                                                    <i class="la la-trash-o"></i> حذف
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!--end::Form group-->

                            <div class="form-group mt-2">
                                <a href="javascript:;" data-repeater-create class="btn btn-light-info">
                                    <i class="la la-plus"></i> اضف جديد
                                </a>
                            </div>
                            <!--end::Form group-->
                        </div>
                        <div class="text-end">
                            <button type="submit" class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder"> حفظ </button>
                        </div>
                    </div>
                </div>


            </form>
            <form method="post" action="{{ route('admin.supervisors.update-password',['id'=>$user->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="card mt-4">
                    <div class="card-body fs-6 p-5 text-gray-700">
                        <h3 class='mb-5'> كلمة المرور </h3>
                        <!--begin::Main wrapper-->
                        <div class="fv-row mb-5" data-kt-password-meter="true">
                            <div class="mb-1">
                                <label class="form-label fw-bolder"> كلمة المرور </label>
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" type="password" placeholder="" name="password" autocomplete="off" />
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>

                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <!--begin::Main wrapper-->
                        <div class="fv-row mb-5" data-kt-password-meter="true">
                            <div class="mb-1">
                                <label class="form-label fw-bolder"> تأكيد كلمة المرور </label>
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid @error('password_confirmation') is-invalid @enderror" type="password" placeholder="" name="password_confirmation" autocomplete="off" />
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>

                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="text-end">
                            <button type="submit" class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder"> حفظ </button>
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
    $('.certificate').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function() {
            $(this).slideDown();
        },

        hide: function(deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });
    $('.working_hours').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function() {
            $(this).slideDown();
        },

        hide: function(deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });
</script>
@endsection