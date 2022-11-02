@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection

@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="#" class="pe-3 text-muted"> الاعدادات   </a></li>
                    <li class="breadcrumb-item pe-3 text-primary">  الاعدادات العامة </li>
                </ol>
            </div> 
            
            <form  method="post" action="{{ route('admin.settings.update-global') }}" enctype="multipart/form-data">
                    @csrf
                <div class="card ">
                    <div class="card-header card-header-stretch justify-content-center">
                        <h3 class="card-title me-8">اللغة</h3>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#paeg_ar">العربية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#paeg_en">الانجليزية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#paeg_sp"> الاسبانية </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="paeg_ar" role="tabpanel">
                                <div class="mb-3">
                                    <label class="form-label fw-bolder">  اسم الموقع  </label>
                                    <input  name="platform_name_ar" type="text"  value="{{$setting['platform_name_ar'] ?? ''}}"    class="form-control form-control-solid    @error('platform_name_ar') is-invalid @enderror" > 
                                    
                                    @error('platform_name_ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                </div>
                                <div class="content-page">
                                    <label class="form-label fw-bolder">  وصف الموقع  </label>
                                    <textarea  name="platform_details_ar"  type="text" class="form-control form-control-solid    @error('platform_details_ar') is-invalid @enderror" >{{$setting['platform_details_ar'] ?? ''}} </textarea> 
                                      @error('platform_details_ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                </div>               
                            </div>
                            <!-- End Tab -->

                            <div class="tab-pane fade" id="paeg_en" role="tabpanel" dir='ltr'>
                            <div class="mb-3">
                                    <label class="form-label fw-bolder">  Site Name   </label>
                                    <input   name="platform_name_en" type="text" value="{{$setting['platform_name_en'] ?? ''}}"  class="form-control form-control-solid    @error('platform_name_en') is-invalid @enderror" >
                                    @error('platform_name_en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror                           
                                </div>
                                <div class="content-page">
                                    <label class="form-label fw-bolder">  Site Description  </label>
                                    <textarea   name="platform_details_en"  type="text" class="form-control form-control-solid    @error('platform_details_en') is-invalid @enderror" >{{$setting['platform_details_en'] ?? ''}} </textarea>
                                    @error('platform_details_en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror 
                                </div>
                            </div>
                            <!-- End Tab -->

                            <div class="tab-pane fade" id="paeg_sp" role="tabpanel" dir='ltr'>
                                <div class="mb-3">
                                    <label class="form-label fw-bolder">  Nombre del sitio  </label>
                                    <input   name="platform_name_sp" type="text" value="{{$setting['platform_name_sp'] ?? ''}}"  class="form-control form-control-solid    @error('platform_name_sp') is-invalid @enderror" >    
                                    @error('platform_name_sp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror                        
                                </div>
                                <div class="content-page">
                                    <label class="form-label fw-bolder">  descripción del lugar  </label>
                                    <textarea   name="platform_details_sp" type="text" class="form-control form-control-solid    @error('platform_details_sp') is-invalid @enderror" >{{$setting['platform_details_sp'] ?? ''}} </textarea> 
                                    @error('platform_details_sp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                </div>
                            </div>
                        </div>
                        
                        <!--begin::Image input-->
                        <label class="form-label fw-bolder d-block  mt-7 mb-3">  شعار الموقع  </label>
                        <div class="image-input image-input-empty" data-kt-image-input="true" style="background-image: url({{asset('assets/media/blank.svg')}})">
                            <div class="image-input-wrapper w-125px h-125px" @if(!is_null($setting['platform_logo'])) style="background-image: url({{asset('storage/images/website_setting') . '/' .$setting['platform_logo']}})" @endif></div>
                            <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="Change avatar">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <input type="file" name="platform_logo" accept=".png, .jpg, .jpeg"/>

                                <input type="hidden" name="avatar_remove" />
                            </label>
                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="Cancel avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="Remove avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                        </div>
                        @error('platform_logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                        <!--end::Image input-->

                        
                    </div>
                </div>

                <div class="text-center bg-white border rounded p-5 mt-3">
                    <button type="submit" class="px-20  w-50  btn btn-primary btn-hover-rise me-5 fw-bolder">  حفظ  </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
