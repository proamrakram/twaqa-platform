@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="{{route('admin.courses-categories.index')}}" class="pe-3 text-muted">التخصصات</a></li>
                    <li class="breadcrumb-item pe-3 text-primary"> إضافة جديد</li>
                </ol>
            </div>        
            <div class="card">
                <div class="card-body fs-6 p-5 text-gray-700">
                <form  method="post" action="{{ route('admin.courses-categories.store') }}" enctype="multipart/form-data">
                    @csrf
                        <label for="" class="form-label fw-bolder d-block"> اختر صورة </label>
                        <div class="image-input image-input-outline mb-8" data-kt-image-input="true" style="background-image: url({{asset('assets/media/svg/avatars/blank.svg')}})">
                            
                            <div class="image-input-wrapper w-150px h-150px" style="background-image: url({{asset('assets/media/300-1.jpg')}})"></div>
                            
                            <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="تغير الصورة">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" class=" @error('avatar') is-invalid @enderror" />
                                <input type="hidden" name="avatar_remove" />
                            </label>
                            <!--end::Edit button-->

                            <!--begin::Cancel button-->
                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="Cancel avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Cancel button-->

                            <!--begin::Remove button-->
                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="حذف الصورة">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Remove button-->
                            @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        </div>
                        <!--end::Image input-->

                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <label class="form-label fw-bolder">الاسم</label>
                                <input type="text" name="title" class="form-control form-control-solid  @error('title') is-invalid @enderror"  >
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div> 
                            <div class="col-md-12 mb-5">
                                <label class="form-label fw-bolder">الوصف</label>
                                <textarea name="description" id="" class="form-control form-control-solid  @error('description') is-invalid @enderror"></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </label>                                    
                            
                            </div> 
                            <div class="col-md-12">
                                <label class="form-label fw-bolder">الحالة</label>
                                <label class="ms-5 form-check form-switch form-check-custom form-check-solid d-inline-block">
                                    <input name="active" class="form-check-input h-20px w-40px  @error('active') is-invalid @enderror" type="checkbox" value="1"  checked="checked"/>
                                    @error('active')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </label>                                    
                            </div>


                        </div>
                        
  
                        <div class="text-end">
                            <button type="submit"  class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder">  حفظ  </button>
                        </div>
                    </form>
                </div>
            </div>    
           
        </div>
    </div>
</div>


@endsection

