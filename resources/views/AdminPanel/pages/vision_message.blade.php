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
                    <li class="breadcrumb-item pe-3 text-primary">  الرؤية والرسالة </li>
                </ol>
            </div> 
            
         
            <form  method="post" action="{{ route('admin.pages.update-vision-message') }}" enctype="multipart/form-data">
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
                                    <label class="form-label fw-bolder"> اسم الصفحة   </label>
                                    <input name="vision_title_ar" value="{{$pages['vision_title_ar'] ?? ''}}"  type="text" class="form-control form-control-solid  @error('vision_title_ar') is-invalid @enderror " >                            
                                    @error('vision_title_ar')
                                                                                                <span class="invalid-feedback" role="alert">
                                                                                                    <strong>{{ $message }}</strong>
                                                                                                </span>
                                                                                                @enderror    
                                                                                            </div>
                                <div class="content-page">
                                    
                                <label class="form-label fw-bolder"> الرسالة </label>
                                <textarea name="message_ar"   id="summary-ckeditor-message-ar"   class="form-control @error('message_ar') is-invalid @enderror "  rows="20" > {{ $pages['message_ar'] ?? '' }}</textarea>
                                                                            
                                                                            @error('message_ar')
                                                                                                <span class="invalid-feedback" role="alert">
                                                                                                    <strong>{{ $message }}</strong>
                                                                                                </span>
                                                                                                @enderror                   
                                
                                    <br>
                                    
                                    <label class="form-label fw-bolder"> الرؤية  </label>
                                    <textarea name="vision_ar"   id="summary-ckeditor-vision-ar"   class="form-control @error('vision_ar') is-invalid @enderror "  rows="20" > {{ $pages['vision_ar'] ?? '' }}</textarea>
                                                                            
                                                                            @error('vision_ar')
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
                                    <input name="vision_title_en" value="{{$pages['vision_title_en'] ?? ''}}"  type="text" class="form-control form-control-solid  @error('vision_title_en') is-invalid @enderror " >                            
                                    @error('vision_title_en')
                                                                                                <span class="invalid-feedback" role="alert">
                                                                                                    <strong>{{ $message }}</strong>
                                                                                                </span>
                                                                                                @enderror    
                                                                                            </div>
                                <div class="content-page">
                                    
                                <label class="form-label fw-bolder"> Message </label>
                                <textarea name="message_en"   id="summary-ckeditor-message-en"    class="form-control @error('message_en') is-invalid @enderror "  rows="20" > {{ $pages['message_en'] ?? '' }}</textarea>
                                                                            
                                                                            @error('message_en')
                                                                                                <span class="invalid-feedback" role="alert">
                                                                                                    <strong>{{ $message }}</strong>
                                                                                                </span>
                                                                                                @enderror                   
                                
                                    <br>
                                    
                                <label class="form-label fw-bolder"> Vision </label>
                                    <textarea name="vision_en"    id="summary-ckeditor-vision-en"  class="form-control @error('vision_en') is-invalid @enderror "  rows="20" > {{ $pages['vision_en'] ?? '' }}</textarea>
                                                                            
                                                                            @error('vision_en')
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
                                    <input name="vision_title_sp" value="{{$pages['vision_title_sp'] ?? ''}}" type="text" class="form-control form-control-solid  @error('vision_title_sp') is-invalid @enderror " >                            
                                    @error('vision_title_sp')
                                                                                                <span class="invalid-feedback" role="alert">
                                                                                                    <strong>{{ $message }}</strong>
                                                                                                </span>
                                                                                                @enderror  
                                                                                            </div>
                                <div class="content-page">
                                    
                                <label class="form-label fw-bolder"> Mensaje </label>
                                <textarea name="message_sp"    id="summary-ckeditor-message-sp" class="form-control @error('message_sp') is-invalid @enderror "  rows="20" > {{ $pages['message_sp'] ?? '' }}</textarea>
                                                                            
                                                                            @error('message_sp')
                                                                                                <span class="invalid-feedback" role="alert">
                                                                                                    <strong>{{ $message }}</strong>
                                                                                                </span>
                                                                                                @enderror                   
                                
                                    <br>
                                    
                                <label class="form-label fw-bolder"> Visión </label>
                                    <textarea name="vision_sp"    id="summary-ckeditor-vision-sp"  class="form-control @error('vision_sp') is-invalid @enderror "  rows="20" > {{ $pages['vision_sp'] ?? '' }}</textarea>
                                                                            
                                                                            @error('vision_sp')
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
                    <button class="px-20  w-50  btn btn-primary btn-hover-rise me-5 fw-bolder">  حفظ  </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('script')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor-message-ar' );
CKEDITOR.replace( 'summary-ckeditor-message-en' );
CKEDITOR.replace( 'summary-ckeditor-message-sp' );
CKEDITOR.replace( 'summary-ckeditor-vision-ar' );
CKEDITOR.replace( 'summary-ckeditor-vision-en' );
CKEDITOR.replace( 'summary-ckeditor-vision-sp' );
</script>
@endsection
