@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection



@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="#" class="pe-3 text-muted"> الصفحات  </a></li>
                    <li class="breadcrumb-item pe-3 text-primary"> الامتحانات للطلاب </li>
                </ol>
            </div> 
            
            <form  method="post" action="{{ route('admin.pages.update-user-exams') }}" enctype="multipart/form-data">
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
                                    <label class="form-label fw-bolder">  اسم الصفحة  </label>
                                    <input type="text" name="user_exams_title_ar" value="{{$pages['user_exams_title_ar'] ?? ''}}" class="form-control form-control-solid   @error('user_exams_title_ar') is-invalid @enderror">
                                    @error('user_exams_title_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror                          
                                </div>
                                <div class="content-page">
                                <textarea name="user_exams_description_ar" id="summary-ckeditor-ar" class="form-control @error('user_exams_description_ar') is-invalid @enderror " rows="20"> {{ $pages['user_exams_description_ar'] ?? '' }}</textarea>
                                    @error('user_exams_description_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>                
                            </div>
                            <!-- End Tab -->

                            <div class="tab-pane fade" id="paeg_en" role="tabpanel" dir='ltr'>
                                <div class="mb-3">
                                    <label class="form-label fw-bolder">  Page Title  </label>
                                    <input type="text" name="user_exams_title_en" value="{{$pages['user_exams_title_en'] ?? ''}}" class="form-control form-control-solid   @error('user_exams_title_en') is-invalid @enderror">
                                    @error('user_exams_title_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror                            
                                </div>
                                <div class="content-page">
                                <textarea name="user_exams_description_en" id="summary-ckeditor-en" class="form-control @error('user_exams_description_en') is-invalid @enderror " rows="20"> {{ $pages['user_exams_description_en'] ?? '' }}</textarea>
                                    @error('user_exams_description_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- End Tab -->

                            <div class="tab-pane fade" id="paeg_sp" role="tabpanel" dir='ltr'>
                                <div class="mb-3">
                                    <label class="form-label fw-bolder">  Título de la página  </label>
                                    <input type="text" name="user_exams_title_sp" value="{{$pages['user_exams_title_sp'] ?? ''}}" class="form-control form-control-solid   @error('user_exams_title_sp') is-invalid @enderror">
                                    @error('user_exams_title_sp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="content-page">  
                                    <textarea name="user_exams_description_sp" id="summary-ckeditor-sp" class="form-control @error('user_exams_description_sp') is-invalid @enderror " rows="20"> {{ $pages['user_exams_description_sp'] ?? '' }}</textarea>
                                    @error('user_exams_description_sp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div> 
                            </div>
                        </div>
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

@section('script')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor-ar' );
CKEDITOR.replace( 'summary-ckeditor-en' );
CKEDITOR.replace( 'summary-ckeditor-sp' );
</script>
@endsection
