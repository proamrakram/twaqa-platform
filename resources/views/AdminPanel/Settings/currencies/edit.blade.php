@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="{{ route('admin.currencies.index')}}" class="pe-3 text-muted"> العملات   </a></li>
                    <li class="breadcrumb-item pe-3 text-primary">  تعديل العملة </li>
                </ol>
            </div>        

            <div class="card border p-0">
                <div class="card-body fs-6 p-5 text-gray-700">
                <form  method="post" action="{{ route('admin.currencies.update',['id'=>$currency->id]) }}" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bolder"> الاسم </label>
                            <input name="name" type="text" value="{{$currency->currency_name}}" class="form-control form-control-solid  @error('name') is-invalid @enderror" >
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bolder"> السعر مقابل الجنيه </label>
                            <input name="egp" type="text" value="{{$currency->egp}}" class="form-control form-control-solid  @error('egp') is-invalid @enderror" >
                            @error('egp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bolder"> السعر مقابل الدولار </label>
                            <input name="dollar" type="text" value="{{$currency->dollar}}" class="form-control form-control-solid  @error('dollar') is-invalid @enderror" >
                            @error('dollar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bolder"> السعر مقابل اليورو </label>
                            <input name="euro" type="text" value="{{$currency->euro}}" class="form-control form-control-solid  @error('euro') is-invalid @enderror" >
                            @error('euro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bolder"> السعر مقابل الريال </label>
                            <input name="riyal" type="text" value="{{$currency->riyal}}" class="form-control form-control-solid  @error('riyal') is-invalid @enderror" >
                            @error('riyal')
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

