@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="{{route('admin.cities.index')}}" class="pe-3 text-muted">المدن</a></li>
                    <li class="breadcrumb-item pe-3 text-primary"> إضافة جديد</li>
                </ol>
            </div>        
            <div class="card">
                <div class="card-body fs-6 p-5 text-gray-700">
                <form  method="post" action="{{ route('admin.cities.store') }}" enctype="multipart/form-data">
                    @csrf

                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <label class="form-label fw-bolder">الاسم (AR)</label>
                                <input type="text" name="city_name_ar" class="form-control form-control-solid  @error('city_name_ar') is-invalid @enderror"  >
                                @error('city_name_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div> 
                            <div class="col-md-12 mb-5">
                                <label class="form-label fw-bolder">الاسم (EN)</label>
                                <input type="text" name="city_name_en" class="form-control form-control-solid  @error('city_name_en') is-invalid @enderror"  >
                                @error('city_name_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div> 
                            <div class="col-md-12 mb-5">
                                <label class="form-label fw-bolder">الاسم (SP)</label>
                                <input type="text" name="city_name_sp" class="form-control form-control-solid  @error('city_name_sp') is-invalid @enderror"  >
                                @error('city_name_sp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>                               
                            <div class="col-md-12 mb-5">
                                 <label class="form-label fw-bolder"> الدولة</label>
                                
                                            <select name="country_id" class="form-select form-select-solid @error('country_id') is-invalid @enderror" data-control="select2" data-dropdown-css-class="w-200px" data-placeholder="اختر .." data-hide-search="true">
                                                <option></option>
                                                @foreach($countries as $country)
                                                <option @if(old('country_id')==$country->id) selected @endif value="{{$country->id}}">{{$country->country_name}} </option>
                                                @endforeach
                                            </select>
                                            @error('country_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                            </div> 
                            <div class="col-md-12">
                                <label class="form-label fw-bolder">الحالة</label>
                                <label class="ms-5 form-check form-switch form-check-custom form-check-solid d-inline-block">
                                    <input name="status" class="form-check-input h-20px w-40px  @error('status') is-invalid @enderror" type="checkbox" value="active"  checked="checked"/>
                                    @error('status')
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

