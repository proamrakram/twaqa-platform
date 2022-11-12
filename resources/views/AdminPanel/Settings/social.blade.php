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
                    <li class="breadcrumb-item pe-3 text-primary"> روابط مواقع التواصل الإجتماعي </li>
                </ol>
            </div> 
            
            <form  method="post" action="{{ route('admin.settings.update-social') }}" enctype="multipart/form-data">
                    @csrf
                <div class="card ">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-bolder">  رابط فيس بوك  </label>
                            <input   name="facebook"  value="{{$setting['facebook'] ?? ''}}"  type="text" class="form-control form-control-solid @error('facebook') is-invalid @enderror" >                        
                            
                            @error('facebook')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror    
                        </div> 
                        <div class="mb-3">
                            <label class="form-label fw-bolder">  رابط تويتر  </label>
                            <input    name="twitter"  value="{{$setting['twitter'] ?? ''}}"  type="text" class="form-control form-control-solid @error('twitter') is-invalid @enderror" >                  
                                    @error('twitter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror          
                        </div> 
                        <div class="mb-3">
                            <label class="form-label fw-bolder">  رابط يوتيوب  </label>
                            <input    name="youtube"  value="{{$setting['youtube'] ?? ''}}"  type="text" class="form-control form-control-solid @error('youtube') is-invalid @enderror" >                     
                                    @error('youtube')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror       
                        </div>            
                        <div class="mb-3">
                            <label class="form-label fw-bolder">  رابط لينكدان  </label>
                            <input    name="linkedin"  value="{{$setting['linkedin'] ?? ''}}"  type="text" class="form-control form-control-solid @error('linkedin') is-invalid @enderror" > 
                                    @error('linkedin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror                           
                        </div>  
                        <div class="mb-3">
                            <label class="form-label fw-bolder">  رابط انستقرام  </label>
                            <input    name="instagram"  value="{{$setting['instagram'] ?? ''}}"  type="text" class="form-control form-control-solid @error('instagram') is-invalid @enderror" >    
                                    @error('instagram')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror                        
                        </div>     
                        <div class="mb-3">
                            <label class="form-label fw-bolder">  رابط تيك توك  </label>
                            <input    name="tiktok"  value="{{$setting['tiktok'] ?? ''}}"  type="text" class="form-control form-control-solid @error('tiktok') is-invalid @enderror" >
                                    @error('tiktok')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror                            
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
