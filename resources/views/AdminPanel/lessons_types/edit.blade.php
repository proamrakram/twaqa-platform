@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="{{route('admin.lessons-types.index')}}" class="pe-3 text-muted">نوع الكورس</a></li>
                    <li class="breadcrumb-item pe-3 text-primary"> اسم النوع </li>
                </ol>
            </div>        

            <div class="card border p-0">
                <div class="card-body fs-6 p-5 text-gray-700">
                <form  method="post" action="{{ route('admin.lessons-types.update',['id'=>$type->id]) }}" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bolder"> الاسم </label>
                            <input name="title" type="text" value="{{$type->title}}" class="form-control form-control-solid  @error('title') is-invalid @enderror" >
                            @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bolder"> الوصف </label>
                            <textarea name="description"   type="text" class="form-control form-control-solid @error('description') is-invalid @enderror" >{{$type->description}}</textarea>
                            @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        </div>  
                        
                        <button type="submit"  class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder">  حفظ  </button>
                    </form>                   
                </div>
            </div> 
                   

        </div>
    </div>
</div>


@endsection

