@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection


@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="{{route('admin.lessons.index')}}" class="pe-3 text-muted"> الحلقات </a></li>
                    <li class="breadcrumb-item pe-3 text-primary">تغيير الموعد</li>
                </ol>
            </div>
            <form method="post" action="{{ route('admin.lessons.update-time',['id'=>$lesson->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body fs-6 p-5 text-gray-700">

                                <div class="abibility-teacher">
                                    <table class="table table-striped table-hover @error('checkbox') is-invalid @enderror">
                                        <thead>
                                            <tr>
                                                <th> اليوم </th>
                                                <th> الموعد المتاح </th>
                                            </tr>
                                        </thead>
                                        <tbody id="working_hours_table">
                                            @foreach($working_hours as $w)
                                            <tr>
                                                <td>{{$w['day']}} ({{$w['date']}})</td>
                                                <td id="day-{{$w['day']}}">

                                                    @foreach($w['times'] as $t)
                                                    <div class="time mb-2 fs-13px d-flex align-items-center justify-content-between">
                                                        <div >
                                                            <span class="fw-bolder"> من </span><span class="text-muted">{{$t['time_from']}} </span>
                                                            <span class="fw-bolder"> إلى </span><span class="text-muted">{{$t['time_to']}} </span>
                                                        </div><input type="checkbox" name="checkbox[{{$w['date']}}]" value="{{$t['time_from']}}" @if($t['checked']==1) checked @endif class="btn btn-info ms-3 sm-padding">
                                                    </div>
                                                    @endforeach
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                     @error('checkbox')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <button type="submit"  class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder">  تعديل  </button>
                    </form>                   


        </div>
    </div>
</div>
@endsection

@section('script')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('summary-ckeditor');
</script>

@endsection