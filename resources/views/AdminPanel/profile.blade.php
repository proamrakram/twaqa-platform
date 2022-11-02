@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3 text-primary">الملف الشخصي</li>
                </ol>
            </div>
            <div class="card">
                <div class="card-body fs-6 p-5 text-gray-700">
                    <h3 class='mb-5'> البيانات الاساسية </h3>
                    <form method="post" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="form-label fw-bolder d-block"> اختر صورة </label>
                                <div class="image-input image-input-outline mb-8" data-kt-image-input="true" style="background-image: url({{asset('assets/media/svg/avatars/blank.svg')}})">

                                    <div class="image-input-wrapper w-200px h-200px  @error('avatar') is-invalid @enderror" style="background-image: url({{$user->img}})"></div>

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
                                    <input name="name" type="text" value="{{$user->name}}" class="form-control form-control-solid  @error('name') is-invalid @enderror">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bolder"> العنوان </label>
                                    <div class="row gx-2">
                                        <div class="col-6">
                                            <input name="country" type="text" value="{{$user->country}}" class="form-control form-control-solid @error('country') is-invalid @enderror" placeholder='الدولة'>

                                            @error('country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <input name="state" type="text" value="{{$user->state}}" class="form-control form-control-solid @error('state') is-invalid @enderror" placeholder='المحافظة'>

                                            @error('state')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row gx-3">
                                    <div class="col mb-5">
                                        <label class="form-label fw-bolder"> الجنس </label>
                                        <select name="gender" class="form-select form-select-solid @error('gender') is-invalid @enderror" data-control="select2" data-dropdown-css-class="w-200px" data-placeholder="اختر .." data-hide-search="true">
                                            <option></option>
                                            <option @if($user->gender=="male" ) selected @endif value="male">ذكر </option>
                                            <option @if($user->gender=="female" ) selected @endif value="female">أنثى </option>
                                        </select>

                                        @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col mb-5">
                                        <label class="form-label fw-bolder d-block">الحالة</label>
                                        <label class=" mt-3 form-check form-switch form-check-custom form-check-solid d-inline-block">
                                            <input name="active" class="form-check-input h-20px w-40px  @error('active') is-invalid @enderror" type="checkbox" value="1" @if($user->active==1) checked="checked" @endif />

                                            @error('active')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </label>
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



                            </div>

                        </div>


                        <div class="text-end">
                            <button type="submit" class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder"> حفظ </button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body fs-6 p-5 text-gray-700">
                <h3 class='mb-5'> كلمة المرور </h3>
                    <form method="post" action="{{ route('admin.profile.update-password') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                           
                            <!--begin::Main wrapper-->
                            <div class="fv-row mb-5" data-kt-password-meter="true">
                                <div class="mb-1">
                                    <label class="form-label fw-bolder"> كلمة المرور </label>
                                    <div class="position-relative mb-3">
                                        <input class="form-control form-control-lg form-control-solid   @error('password') is-invalid @enderror" type="password" placeholder="" name="password" autocomplete="off" />
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
                                        <input class="form-control form-control-lg form-control-solid   @error('password_confirmation') is-invalid @enderror" type="password" placeholder="" name="password_confirmation" autocomplete="off" />
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



                        </div>


                        <div class="text-end">
                            <button type="submit" class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder"> حفظ </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection