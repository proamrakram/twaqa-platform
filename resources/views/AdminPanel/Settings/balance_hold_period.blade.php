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
                    <li class="breadcrumb-item pe-3 text-primary">  مدة تعليق الرصيد </li>
                </ol>
            </div> 
            
            
            <div class="card border p-0">
                <div class="card-body fs-6 p-5 text-gray-700">
                <form  method="post" action="{{ route('admin.balance-period-hold.update') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bolder">   مدة تعليق الرصيد (بالأيام)</label>
                            <input name="balance_period_hold" type="text" value="{{$setting->value}}" class="form-control form-control-solid  @error('balance_period_hold') is-invalid @enderror" >
                            @error('balance_period_hold')
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
